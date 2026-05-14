<?php
// src/Controller/MenuController.php
// ECF DWWM 2026 — Vite & Gourmand

namespace App\Controller;

use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/menus', name: 'menu_')]
class MenuController extends AbstractController
{
    #[Route('', name: 'index')]
    public function index(MenuRepository $menuRepository): Response
    {
        $menus = $menuRepository->findAll();

        return $this->render('menus/index.html.twig', [
            'menus' => $menus,
        ]);
    }

    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'])]
    public function show(int $id, MenuRepository $menuRepository): Response
    {
        $menu = $menuRepository->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('Menu introuvable.');
        }

        $autresMenus = $menuRepository->findAutresMenus($id, 3);

        return $this->render('menus/show.html.twig', [
            'menu'        => $menu,
            'autresMenus' => $autresMenus,
        ]);
    }

    #[Route('/api/menus', name: 'api_menus')]
    public function filterMenus(Request $request, MenuRepository $menuRepository): JsonResponse
    {
        $theme  = htmlspecialchars(strip_tags($request->query->get('theme', '')));
        $regime = htmlspecialchars(strip_tags($request->query->get('regime', '')));
        $prix   = (float) $request->query->get('prix', 0);

        $menus = $menuRepository->findByFilters($theme, $prix, $regime);

        $data = array_map(function ($menu) {
            return [
                'id'                    => $menu->getId(),
                'titre'                 => $menu->getTitre(),
                'description'           => $menu->getDescription(),
                'prix'                  => $menu->getPrix(),
                'theme'                 => $menu->getTheme(),
                'regime'                => $menu->getRegime(),
                'quantiteRestante'      => $menu->getQuantiteRestante(),
                'nombrePersonneMinimum' => $menu->getNombrePersonneMinimum(),
                'disponible'            => $menu->isDisponible(),
            ];
        }, $menus);

        return $this->json($data);
    }
}