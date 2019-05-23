<?php

namespace App\Controller\Calculadora;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DividirController extends AbstractController
{
    public function dividir()
    {
    	$a = 5;
    	$b = 6;

    	$resultado = $a + $b;

        return $this->render('calculadora/dividir.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
