<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Menu;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\MenuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
final class CommandeController extends AbstractController
{
    // ─────────────────────────────────────────────────────────────
    // 6.1 — Formulaire de commande
    // ─────────────────────────────────────────────────────────────
    #[Route('/commande/create', name: 'cmd_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $em,
        MenuRepository $menuRepository,
        MailerInterface $mailer
    ): Response {
        // Récupérer le menu via le query param ?menu_id=X
        $menuId = $request->query->getInt('menu_id');
        $menu = $menuRepository->find($menuId);

        if (!$menu) {
            $this->addFlash('danger', 'Menu introuvable.');
            return $this->redirectToRoute('menu_index');
        }

        if (!$menu->isDisponible()) {
            $this->addFlash('danger', 'Ce menu n\'est plus disponible.');
            return $this->redirectToRoute('menu_show', ['id' => $menu->getId()]);
        }

        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande, [
            'menu' => $menu,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ── Règle métier clé : réduction -10% si >= 5 personnes ──
            $nombrePersonnes = $commande->getNombrePersonnes();
            $prixBase  = (float) $menu->getPrix() * $nombrePersonnes;
            $prixTotal = $prixBase;

            if ($nombrePersonnes >= 5) {
                $prixTotal = $prixBase * 0.90; // -10%
            }

            // Remplir les champs calculés
            $commande->setMenu($menu);
            $commande->setUser($this->getUser());
            $commande->setPrixTotal(round($prixTotal, 2));
            $commande->setStatut('en_attente');
            $commande->setDateCommande(new \DateTime());
            $commande->setNumeroCommande('VG-' . strtoupper(uniqid()));

            $em->persist($commande);
            $em->flush();

            // ── 6.3 — Envoi email confirmation ──
            $email = (new Email())
                ->from('noreply@vite-gourmand.fr')
                ->to($this->getUser()->getEmail())
                ->subject('Commande confirmée — Vite & Gourmand')
                ->html(
                    '<h2>Votre commande est confirmée !</h2>'
                    . '<p>Bonjour ' . $this->getUser()->getPrenom() . ',</p>'
                    . '<p>Menu : <strong>' . $menu->getTitre() . '</strong></p>'
                    . '<p>Nombre de personnes : ' . $nombrePersonnes . '</p>'
                    . ($nombrePersonnes >= 5
                        ? '<p style="color:green">Réduction -10% appliquée ✔</p>'
                        : '')
                    . '<p>Total : <strong>' . number_format($prixTotal, 2, ',', ' ') . ' €</strong></p>'
                    . '<p>Date de prestation : ' . $commande->getDatePrestation()->format('d/m/Y') . '</p>'
                    . '<p>Merci pour votre confiance !</p>'
                );

            $mailer->send($email);

            return $this->redirectToRoute('cmd_confirm', ['id' => $commande->getId()]);
        }

        return $this->render('commande/create.html.twig', [
            'menu'    => $menu,
            'form'    => $form,
        ]);
    }

    // ─────────────────────────────────────────────────────────────
    // 6.2 — Page de confirmation
    // ─────────────────────────────────────────────────────────────
    #[Route('/commande/confirm/{id}', name: 'cmd_confirm', methods: ['GET'])]
    public function confirm(Commande $commande): Response
    {
        // Sécurité : l'utilisateur ne peut voir que SES commandes
        if ($commande->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $menu          = $commande->getMenu();
        $nombrePersonnes = $commande->getNombrePersonnes();
        $prixBase      = (float) $menu->getPrix() * $nombrePersonnes;
        $aReduction    = $nombrePersonnes >= 5;
        $montantReduc  = $aReduction ? round($prixBase * 0.10, 2) : 0;

        return $this->render('commande/confirm.html.twig', [
            'commande'     => $commande,
            'menu'         => $menu,
            'prixBase'     => $prixBase,
            'aReduction'   => $aReduction,
            'montantReduc' => $montantReduc,
        ]);
    }

    // ─────────────────────────────────────────────────────────────
    // 6.4 — Historique commandes de l'utilisateur connecté
    // ─────────────────────────────────────────────────────────────
    #[Route('/commande/historique', name: 'cmd_history', methods: ['GET'])]
    public function historique(CommandeRepository $commandeRepository): Response
    {
        $commandes = $commandeRepository->findBy(
            ['user' => $this->getUser()],
            ['dateCommande' => 'DESC']
        );

        return $this->render('commande/historique.html.twig', [
            'commandes' => $commandes,
        ]);
    }
}