<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgruparproductoRepository")
 */
class Agruparproducto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="agruparproductos")
     */
    private $idproducto;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

     /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $ingresofecha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdproducto(): ?Productos
    {
        return $this->idproducto;
    }

    public function setIdproducto(?Productos $idproducto): self
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
         public function __toString()
   {
      return strval($this->getId());
   }

         public function getIngresofecha(): ?\DateTimeInterface
         {
             return $this->ingresofecha;
         }

         public function setIngresofecha(\DateTimeInterface $ingresofecha): self
         {
             $this->ingresofecha = $ingresofecha;

             return $this;
         }
}
