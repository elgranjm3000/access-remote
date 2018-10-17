<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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


      /**
     * @ORM\Column(type="string",nullable=true)
     *     
     */
    private $brochure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DetallesFactura", mappedBy="idproducto")
     */
    private $detallesFacturas;

    public function __construct()
    {
        $this->detallesFacturas = new ArrayCollection();
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

     public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {

      if($brochure != "" ){
        $this->brochure = $brochure;

        return $this;
      }
    }

        public function __toString()
   {
      return strval($this->getId());
   }

        /**
         * @return Collection|DetallesFactura[]
         */
        public function getDetallesFacturas(): Collection
        {
            return $this->detallesFacturas;
        }

        public function addDetallesFactura(DetallesFactura $detallesFactura): self
        {
            if (!$this->detallesFacturas->contains($detallesFactura)) {
                $this->detallesFacturas[] = $detallesFactura;
                $detallesFactura->setIdproducto($this);
            }

            return $this;
        }

        public function removeDetallesFactura(DetallesFactura $detallesFactura): self
        {
            if ($this->detallesFacturas->contains($detallesFactura)) {
                $this->detallesFacturas->removeElement($detallesFactura);
                // set the owning side to null (unless already changed)
                if ($detallesFactura->getIdproducto() === $this) {
                    $detallesFactura->setIdproducto(null);
                }
            }

            return $this;
        }
}
