<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\CommandeRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('', name: 'admin_dashboard')]
    public function dashboard(
        MenuRepository $menuRepo,
        DocumentManager $dm
    ): Response {

        // -- Stats MariaDB --
        // Nombre total de menus
        $totalMenus = count($menuRepo->findAll());

        // Menus disponibles (quantiteRestante > 0)
        $menusDisponibles = count(array_filter(
            $menuRepo->findAll(),
            fn($m) => $m->getQuantiteRestante() > 0
        ));

        // -- Stats par thème pour ChartJS --
        $menus = $menuRepo->findAll();
        $statsByTheme = [];
        foreach ($menus as $menu) {
            $theme = $menu->getTheme() ?? 'classique';
            if (!isset($statsByTheme[$theme])) {
                $statsByTheme[$theme] = ['count' => 0, 'prixMoyen' => 0, 'total' => 0];
            }
            $statsByTheme[$theme]['count']++;
            $statsByTheme[$theme]['total'] += (float) $menu->getPrix();
        }
        foreach ($statsByTheme as $theme => &$stats) {
            $stats['prixMoyen'] = round($stats['total'] / $stats['count'], 2);
        }

        // -- Stats MongoDB -- Avis en attente de validation
        $avisEnAttente = $dm->getRepository(Avis::class)
            ->findBy(['statut' => 'en_attente']);
        $totalAvis = count($dm->getRepository(Avis::class)->findAll());

        // -- Données pour ChartJS --
        // Labels et données extraits pour le graphique
        $chartLabels = array_map('ucfirst', array_keys($statsByTheme));
        $chartData   = array_column(array_values($statsByTheme), 'count');
        $chartPrix   = array_column(array_values($statsByTheme), 'prixMoyen');

        return $this->render('admin/dashboard.html.twig', [
            'totalMenus'       => $totalMenus,
            'menusDisponibles' => $menusDisponibles,
            'avisEnAttente'    => count($avisEnAttente),
            'totalAvis'        => $totalAvis,
            'statsByTheme'     => $statsByTheme,
            'chartLabels'      => json_encode($chartLabels),
            'chartData'        => json_encode($chartData),
            'chartPrix'        => json_encode($chartPrix),
        ]);
    }
}