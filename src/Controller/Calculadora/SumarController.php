<?php

namespace App\Controller\Calculadora;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SumarController extends AbstractController
{
    public function sumar()
    {
    	$a = 5;
    	$b = 6;

    	$resultado = $a + $b;

        return $this->render('calculadora/sumar.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
