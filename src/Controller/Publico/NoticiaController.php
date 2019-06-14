<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NoticiaController extends AbstractController
{
    public function noticia()
    {
        return $this->render('publico/noticia.html.twig');
    }
}
