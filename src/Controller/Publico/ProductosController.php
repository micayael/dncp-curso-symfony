<?php

namespace App\Controller\Publico;

use App\Entity\Producto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductosController extends AbstractController
{
    public function productos(EntityManagerInterface $em)
    {
        $productos = $em->getRepository(Producto::class)
            ->findBy(
                [
                    'nuevo' => true
                ],
                [
                    'nombre' => 'ASC'
                ],
                9
            );

        return $this->render('publico/productos.html.twig', [
            'productos' => $productos,
        ]);
    }
}
