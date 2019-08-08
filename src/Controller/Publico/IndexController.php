<?php

namespace App\Controller\Publico;

use App\Entity\Autor;
use App\Entity\Noticia;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index(EntityManagerInterface $em)
    {
//        $autor1 = new Autor();
//        $autor1->setNombre('Juan Ardissone');
//
//        $autor2 = new Autor();
//        $autor2->setNombre('Jorge Miranda');
//
//        $noticia1 = new Noticia();
//        $noticia1->setTitulo('Noticia 1');
//        $noticia1->setContenido('Contenido 1');
//        $noticia1->setImagen('noticia1.jpg');
//        $noticia1->setAutor($autor1);
//
//        $noticia2 = new Noticia();
//        $noticia2->setTitulo('Noticia 2');
//        $noticia2->setContenido('Contenido 2');
//        $noticia2->setImagen('noticia2.jpg');
//        $noticia2->setAutor($autor1);
//
//        $em->persist($autor1);
//        $em->persist($autor2);
//
//        $em->persist($noticia1);
//        $em->persist($noticia2);
//
//        $em->flush();

//--------------------------------------------------

//        $noticia = $em->getRepository(Noticia::class)->find(1);
//
//        $autor = $noticia->getAutor();
//
//        $noticiasDelAutor = $autor->getNoticias();
//
//        dump($noticiasDelAutor);
//
//        foreach ($noticiasDelAutor as $noticia) {
//            dump($noticia->getTitulo());
//        }

        return $this->render('publico/index.html.twig');
    }
}
