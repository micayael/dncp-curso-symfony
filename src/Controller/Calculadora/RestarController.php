<?php

namespace App\Controller\Calculadora;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestarController extends AbstractController
{
    public function restar()
    {
    	$a = 5;
    	$b = 6;

    	$resultado = $a + $b;

        return $this->render('calculadora/restar.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
