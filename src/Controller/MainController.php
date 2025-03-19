<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
final class MainController extends AbstractController{
    #[Route('', name: 'app_main')]
    public function index(): Response
    {
        $slides = [
            ['image' => 'images/assurances/ankara.png', 'name' => 'ANKARA'],
            ['image' => 'images/assurances/gga.png', 'name' => 'G G A'],
            ['image' => 'images/assurances/madgi.jpeg', 'name' => 'MADGI'],
            ['image' => 'images/assurances/mspci.png', 'name' => 'MSPCI'],
            ['image' => 'images/assurances/vitasante.jpeg', 'name' => 'VITASANTE'],
            ['image' => 'images/assurances/olea.jpeg', 'name' => 'OLEA SANTÉ'],
            ['image' => 'images/assurances/chorus.jpeg', 'name' => 'CHORUS'],
            ['image' => 'images/assurances/atlantique.png', 'name' => 'ATLANTIQUE ASSURANCES'],
            ['image' => 'images/assurances/cimef.png', 'name' => 'CIMEF ASSURANCES'],
            ['image' => 'images/assurances/vitalis.png', 'name' => 'VITALIS SANTÉ'],
            ['image' => 'images/assurances/nsia.jpeg', 'name' => 'NSIA ASSURANCES'],
        ];

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'slides' => $slides,
        ]);
    }
}
