<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProductoController extends AbstractController
{
    public function producto($id)
    {
        $producto = $this->getProducto($id);

        if (!$producto){

            throw $this->createNotFoundException();

        }

        return $this->render('publico/producto.html.twig', [
            'producto' => $producto
        ]);
    }

    private function getProducto($id)
    {
        $productos = [
            [
                'id' => 1,
                'nombre' => 'Producto 1',
                'imagen' => 'product1.jpg',
                'precio' => 143.00,
                'oferta' => false,
                'nuevo' => false,
                'precio_anterior' => null,
            ],
            [
                'id' => 2,
                'nombre' => 'Producto 2',
                'imagen' => 'product2.jpg',
                'precio' => 143.00,
                'oferta' => true,
                'nuevo' => true,
                'precio_anterior' => 280,
            ],
            [
                'id' => 3,
                'nombre' => 'Producto 3',
                'imagen' => 'product3.jpg',
                'precio' => 100.00,
                'oferta' => false,
                'nuevo' => true,
                'precio_anterior' => null,
            ],
            [
                'id' => 4,
                'nombre' => 'Producto 4',
                'imagen' => 'product4.jpg',
                'precio' => 120.00,
                'oferta' => true,
                'nuevo' => false,
                'precio_anterior' => 150,
            ],
            [
                'id' => 5,
                'nombre' => 'Producto 5',
                'imagen' => 'product4.jpg',
                'precio' => 120.00,
                'oferta' => true,
                'nuevo' => false,
                'precio_anterior' => 150,
            ],
            [
                'id' => 6,
                'nombre' => 'Producto 6',
                'imagen' => 'product4.jpg',
                'precio' => 120.00,
                'oferta' => true,
                'nuevo' => false,
                'precio_anterior' => 150,
            ],
        ];

        $producto = null;

        for ($i=0; $i<count($productos); ++$i){

            if($productos[$i]['id'] == $id){
                $producto = $productos[$i];
                break;
            }

        }

        return $producto;
    }
}
