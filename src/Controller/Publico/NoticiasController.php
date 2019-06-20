<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NoticiasController extends AbstractController
{
    public function noticias()
    {
        return $this->render('publico/noticias.html.twig');
    }
}
