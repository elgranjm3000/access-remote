<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductosRepository")
 */
class Productos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    

    /**
     * @ORM\Column(type="float")
     */
    private $costo;

    /**
     * @ORM\Column(type="float")
     */
    private $precioVenta;

    /**
     * @ORM\Column(type="text")
     */
    private $comentarios;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cantidadPresentacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Familia", inversedBy="productos")
     */
    private $idfamilia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Medidas", inversedBy="productos")
     */
    private $idmedidas;

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

    public function getUnidadMedida(): ?string
    {
        return $this->unidadMedida;
    }

    public function setUnidadMedida(string $unidadMedida): self
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    public function getCosto(): ?float
    {
        return $this->costo;
    }

    public function setCosto(float $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getPrecioVenta(): ?float
    {
        return $this->precioVenta;
    }

    public function setPrecioVenta(float $precioVenta): self
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getCantidadPresentacion(): ?string
    {
        return $this->cantidadPresentacion;
    }

    public function setCantidadPresentacion(string $cantidadPresentacion): self
    {
        $this->cantidadPresentacion = $cantidadPresentacion;

        return $this;
    }

    public function getIdfamilia(): ?Familia
    {
        return $this->idfamilia;
    }

    public function setIdfamilia(?Familia $idfamilia): self
    {
        $this->idfamilia = $idfamilia;

        return $this;
    }

    public function getIdmedidas(): ?Medidas
    {
        return $this->idmedidas;
    }

    public function setIdmedidas(?Medidas $idmedidas): self
    {
        $this->idmedidas = $idmedidas;

        return $this;
    }

        public function __toString()
   {
      return strval($this->getId());
   }
}
