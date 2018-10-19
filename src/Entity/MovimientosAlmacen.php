<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovimientosAlmacenRepository")
 */
class MovimientosAlmacen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdProducto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdAlmacenDestino;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdAlmacenOrigen;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumMovimientos;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cantidad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Comentarion;

    /**
     * @ORM\Column(type="date")
     */
    private $Fecha;

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProducto(): ?Productos
    {
        return $this->IdProducto;
    }

    public function setIdProducto(?Productos $IdProducto): self
    {
        $this->IdProducto = $IdProducto;

        return $this;
    }

    public function getIdAlmacenDestino(): ?Almacen
    {
        return $this->IdAlmacenDestino;
    }

    public function setIdAlmacenDestino(?Almacen $IdAlmacenDestino): self
    {
        $this->IdAlmacenDestino = $IdAlmacenDestino;

        return $this;
    }

    public function getIdAlmacenOrigen(): ?Almacen
    {
        return $this->IdAlmacenOrigen;
    }

    public function setIdAlmacenOrigen(?Almacen $IdAlmacenOrigen): self
    {
        $this->IdAlmacenOrigen = $IdAlmacenOrigen;

        return $this;
    }

    public function getNumMovimientos(): ?int
    {
        return $this->NumMovimientos;
    }

    public function setNumMovimientos(int $NumMovimientos): self
    {
        $this->NumMovimientos = $NumMovimientos;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->Cantidad;
    }

    public function setCantidad(int $Cantidad): self
    {
        $this->Cantidad = $Cantidad;

        return $this;
    }

    public function getComentarion(): ?string
    {
        return $this->Comentarion;
    }

    public function setComentarion(string $Comentarion): self
    {
        $this->Comentarion = $Comentarion;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->Fecha;
    }

    public function setFecha(\DateTimeInterface $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

   
}
