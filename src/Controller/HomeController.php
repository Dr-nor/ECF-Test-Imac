<?php
// src/Controller/HomeController.php
// ECF DWWM 2026 — Vite & Gourmand

namespace App\Controller;

use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_')]
    public function index(MenuRepository $menuRepository): Response
    {
        $menus = $menuRepository->findBy([], ['id' => 'ASC'], 3);

        return $this->render('home/index.html.twig', [
            'menus' => $menus,
        ]);
    }
}