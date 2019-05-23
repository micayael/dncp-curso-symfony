<?php

namespace App\Controller\Calculadora;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SumarController extends AbstractController
{
    public function sumar($valor1, $valor2)
    {
    	$resultado = $valor1 + $valor2;

        return $this->render('calculadora/sumar.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
