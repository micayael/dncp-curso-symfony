<?php

namespace App\Controller\Calculadora;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MultiplicarController extends AbstractController
{
    public function multiplicar()
    {
    	$a = 5;
    	$b = 6;

    	$resultado = $a + $b;

        return $this->render('calculadora/multiplicar.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
