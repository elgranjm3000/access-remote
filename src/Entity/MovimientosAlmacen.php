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
    private $Destino;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen")
     */
    private $Origen;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cantidad;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clientes")
     */
    private $IdCliente;

    /**
     * @ORM\Column(type="date")
     */
    private $Fecha;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Comentarios;

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

    public function getDestino(): ?Almacen
    {
        return $this->Destino;
    }

    public function setDestino(?Almacen $Destino): self
    {
        $this->Destino = $Destino;

        return $this;
    }

    public function getOrigen(): ?Almacen
    {
        return $this->Origen;
    }

    public function setOrigen(?Almacen $Origen): self
    {
        $this->Origen = $Origen;

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

    public function getStatus(): ?bool
    {
        return $this->Status;
    }

    public function setStatus(?bool $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getIdCliente(): ?Clientes
    {
        return $this->IdCliente;
    }

    public function setIdCliente(?Clientes $IdCliente): self
    {
        $this->IdCliente = $IdCliente;

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

    public function getComentarios(): ?string
    {
        return $this->Comentarios;
    }

    public function setComentarios(?string $Comentarios): self
    {
        $this->Comentarios = $Comentarios;

        return $this;
    }
}
