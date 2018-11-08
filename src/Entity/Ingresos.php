<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngresosRepository")
 */
class Ingresos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="ingresos")
     */
    private $productos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proveedores", inversedBy="ingresos")
     */
    private $proveedor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen", inversedBy="ingresos")
     */
    private $Almacen;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $comentario;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $vencimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductos(): ?Productos
    {
        return $this->productos;
    }

    public function setProductos(?Productos $productos): self
    {
        $this->productos = $productos;

        return $this;
    }

    public function getProveedor(): ?Proveedores
    {
        return $this->proveedor;
    }

    public function setProveedor(?Proveedores $proveedor): self
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    public function getAlmacen(): ?Almacen
    {
        return $this->Almacen;
    }

    public function setAlmacen(?Almacen $Almacen): self
    {
        $this->Almacen = $Almacen;

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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getVencimiento(): ?\DateTimeInterface
    {
        return $this->vencimiento;
    }

    public function setVencimiento(\DateTimeInterface $vencimiento): self
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }
}
