<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnsambleRepository")
 */
class Ensamble
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="ensambles")
     */
    private $idproducto;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="float")
     */
    private $monto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productos", inversedBy="emsablesaddproductos")
     */
    private $productoadd;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $subtotal;

    


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

    public function getMonto(): ?float
    {
        return $this->monto;
    }

    public function setMonto(float $monto): self
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * @return Collection|Productos[]
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setIdensable($this);
        }

        return $this;
    }

    public function removeProducto(Productos $producto): self
    {
        if ($this->productos->contains($producto)) {
            $this->productos->removeElement($producto);
            // set the owning side to null (unless already changed)
            if ($producto->getIdensable() === $this) {
                $producto->setIdensable(null);
            }
        }

        return $this;
    }

    public function getProductoadd(): ?Productos
    {
        return $this->productoadd;
    }

    public function setProductoadd(?Productos $productoadd): self
    {
        $this->productoadd = $productoadd;

        return $this;
    }

    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }

    public function setSubtotal(?float $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }
}
