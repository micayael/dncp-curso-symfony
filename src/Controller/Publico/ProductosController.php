<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductosController extends AbstractController
{
    public function productos()
    {
        return $this->render('publico/productos.html.twig');
    }
}
