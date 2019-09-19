<?php

namespace App\Controller\Publico;

use App\Entity\Contacto;
use App\Form\ContactoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactoController extends AbstractController
{
    public function contacto(Request $request, EntityManagerInterface $em)
    {
        $contacto = new Contacto();

        $form = $this->createForm(ContactoType::class, $contacto);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em->persist($contacto);
            $em->flush();

            return $this->redirectToRoute('publico.contacto');

        }

        return $this->render('publico/contacto.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
