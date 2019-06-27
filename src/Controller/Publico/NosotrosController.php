<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NosotrosController extends AbstractController
{
    public function nosotros()
    {
        return $this->render('publico/nosotros.html.twig');
    }
}
