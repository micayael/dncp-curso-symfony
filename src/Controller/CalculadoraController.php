<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculadoraController extends AbstractController
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

    public function restar()
    {
        $a = 5;
    	$b = 6;

    	$resultado = $a - $b;

        return $this->render('calculadora/restar.html.twig', [
        	'resultado' => $resultado
        ]);
    }

    public function multiplicar()
    {
        $a = 5;
    	$b = 6;

    	$resultado = $a * $b;

        return $this->render('calculadora/multiplicar.html.twig', [
        	'resultado' => $resultado
        ]);
    }

    public function dividir()
    {
        $a = 5;
    	$b = 6;

    	$resultado = $a / $b;

        return $this->render('calculadora/dividir.html.twig', [
        	'resultado' => $resultado
        ]);
    }
}
