<?php

namespace App\Controller\Publico;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactoController extends AbstractController
{
    public function contacto()
    {
        return $this->render('publico/contacto.html.twig');
    }
}
