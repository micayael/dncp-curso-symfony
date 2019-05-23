<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaginaPrincipalController extends AbstractController
{
    public function index()
    {
        return $this->render('home.html.twig');
    }
}
