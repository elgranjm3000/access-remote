<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DetallesFacturaRepository")
 */
class DetallesFactura
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="detallesFacturas")
     */
    private $idproducto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facturas", inversedBy="detallesFacturas")
     */
    private $idfactura;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ordenPromocion;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $descuento;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cantidadactual;
    
    

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

    public function getIdfactura(): ?Facturas
    {
        return $this->idfactura;
    }

    public function setIdfactura(?Facturas $idfactura): self
    {
        $this->idfactura = $idfactura;

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

    public function getOrdenPromocion(): ?string
    {
        return $this->ordenPromocion;
    }

    public function setOrdenPromocion(string $ordenPromocion): self
    {
        $this->ordenPromocion = $ordenPromocion;

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

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getDescuento(): ?float
    {
        return $this->descuento;
    }

    public function setDescuento(?float $descuento): self
    {
        $this->descuento = $descuento;

        return $this;
    }

    public function getCantidadactual(): ?int
    {
        return $this->cantidadactual;
    }

    public function setCantidadactual(int $cantidadactual): self
    {
        $this->cantidadactual = $cantidadactual;

        return $this;
    }
}
