<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AutorRepository")
 */
class Autor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Noticia", mappedBy="autor")
     */
    private $noticias;

    public function __construct()
    {
        $this->noticias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection|Noticia[]
     */
    public function getNoticias(): Collection
    {
        return $this->noticias;
    }

    public function addNoticia(Noticia $noticia): self
    {
        if (!$this->noticias->contains($noticia)) {
            $this->noticias[] = $noticia;
            $noticia->setAutor($this);
        }

        return $this;
    }

    public function removeNoticia(Noticia $noticia): self
    {
        if ($this->noticias->contains($noticia)) {
            $this->noticias->removeElement($noticia);
            // set the owning side to null (unless already changed)
            if ($noticia->getAutor() === $this) {
                $noticia->setAutor(null);
            }
        }

        return $this;
    }
}
