<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestmenuController extends AbstractController
{
    #[Route('/testmenu', name: 'app_testmenu')]
    public function index(): Response
    {
        return $this->render('testmenu/index.html.twig', [
            'controller_name' => 'TestmenuController',
        ]);
    }
}
