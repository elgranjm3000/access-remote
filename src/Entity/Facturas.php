<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $reciboCaja;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $ordenCompra;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MovimientosDepositos", mappedBy="facturas", cascade={"persist", "remove"})
     */
    private $movimientosdepositos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clientes", inversedBy="facturas")
     */
    private $idcliente;


    protected $idclientesrelacion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DetallesFactura", mappedBy="idfactura", cascade={"persist", "remove"})
     */
    private $detallesFacturas;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $dias;

    /**
     * @ORM\Column(type="string", length=2,nullable=true)
     */
    private $forma;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechavencimiento;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MovimientosAlmacen", mappedBy="idfactura", cascade={"persist", "remove"})
     */
    private $movimientosAlmacens;

    /**
     * @ORM\Column(type="string", length=60,nullable=true)
     */
    private $numfactura;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $serie;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $tipofactura;


    

    public function __construct()
    {
        $this->movimientosdepositos = new ArrayCollection();
        $this->detallesFacturas = new ArrayCollection();
        $this->movimientosAlmacens = new ArrayCollection();
    }

  

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

    /**
     * @return Collection|MovimientosDepositos[]
     */
    public function getMovimientosdepositos(): Collection
    {
        return $this->movimientosdepositos;
    }

    public function addMovimientosdeposito(MovimientosDepositos $movimientosdeposito): self
    {
        if (!$this->movimientosdepositos->contains($movimientosdeposito)) {
            $this->movimientosdepositos[] = $movimientosdeposito;
            $movimientosdeposito->setFacturas($this);
        }

        return $this;
    }

    public function removeMovimientosdeposito(MovimientosDepositos $movimientosdeposito): self
    {
        if ($this->movimientosdepositos->contains($movimientosdeposito)) {
            $this->movimientosdepositos->removeElement($movimientosdeposito);
            // set the owning side to null (unless already changed)
            if ($movimientosdeposito->getFacturas() === $this) {
                $movimientosdeposito->setFacturas(null);
            }
        }

        return $this;
    }

     public function __toString()
   {
      return strval($this->getId());
   }

     public function getIdcliente(): ?Clientes
     {
         return $this->idcliente;
     }

     public function setIdcliente(?Clientes $idcliente): self
     {
         $this->idcliente = $idcliente;

         return $this;
     }

         public function getIdclientesrelacion()
    {
        return $this->idclientesrelacion;
    }

    public function setIdclientesrelacion($idclientesrelacion)
    {
        $this->idclientesrelacion = $idclientesrelacion;

        return $this;
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
            $detallesFactura->setIdfactura($this);
        }

        return $this;
    }

    public function removeDetallesFactura(DetallesFactura $detallesFactura): self
    {
        if ($this->detallesFacturas->contains($detallesFactura)) {
            $this->detallesFacturas->removeElement($detallesFactura);
            // set the owning side to null (unless already changed)
            if ($detallesFactura->getIdfactura() === $this) {
                $detallesFactura->setIdfactura(null);
            }
        }

        return $this;
    }

    public function getDias(): ?int
    {
        return $this->dias;
    }

    public function setDias(int $dias): self
    {
        $this->dias = $dias;

        return $this;
    }

    public function getForma(): ?string
    {
        return $this->forma;
    }

    public function setForma(string $forma): self
    {
        $this->forma = $forma;

        return $this;
    }

    public function getFechavencimiento(): ?\DateTimeInterface
    {
        return $this->fechavencimiento;
    }

    public function setFechavencimiento(\DateTimeInterface $fechavencimiento): self
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * @return Collection|MovimientosAlmacen[]
     */
    public function getMovimientosAlmacens(): Collection
    {
        return $this->movimientosAlmacens;
    }

    public function addMovimientosAlmacen(MovimientosAlmacen $movimientosAlmacen): self
    {
        if (!$this->movimientosAlmacens->contains($movimientosAlmacen)) {
            $this->movimientosAlmacens[] = $movimientosAlmacen;
            $movimientosAlmacen->setIdfactura($this);
        }

        return $this;
    }

    public function removeMovimientosAlmacen(MovimientosAlmacen $movimientosAlmacen): self
    {
        if ($this->movimientosAlmacens->contains($movimientosAlmacen)) {
            $this->movimientosAlmacens->removeElement($movimientosAlmacen);
            // set the owning side to null (unless already changed)
            if ($movimientosAlmacen->getIdfactura() === $this) {
                $movimientosAlmacen->setIdfactura(null);
            }
        }

        return $this;
    }

    public function getNumfactura(): ?string
    {
        return $this->numfactura;
    }

    public function setNumfactura(string $numfactura): self
    {
        $this->numfactura = $numfactura;

        return $this;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): self
    {
        $this->serie = $serie;

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

    public function getTipofactura(): ?string
    {
        return $this->tipofactura;
    }

    public function setTipofactura(string $tipofactura): self
    {
        $this->tipofactura = $tipofactura;

        return $this;
    }

   
}
