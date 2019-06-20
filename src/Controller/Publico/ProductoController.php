<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductoController extends AbstractController
{
    public function producto()
    {
        return $this->render('publico/producto.html.twig');
    }
}
