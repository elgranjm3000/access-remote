<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacturasRepository")
 */
class Facturas
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
    private $reciboCaja;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ordenCompra;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comentarios;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReciboCaja(): ?string
    {
        return $this->reciboCaja;
    }

    public function setReciboCaja(string $reciboCaja): self
    {
        $this->reciboCaja = $reciboCaja;

        return $this;
    }

    public function getOrdenCompra(): ?string
    {
        return $this->ordenCompra;
    }

    public function setOrdenCompra(string $ordenCompra): self
    {
        $this->ordenCompra = $ordenCompra;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

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
}
