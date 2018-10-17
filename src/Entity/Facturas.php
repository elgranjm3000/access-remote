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
     * @ORM\OneToMany(targetEntity="App\Entity\DetallesFactura", mappedBy="idfactura")
     */
    private $detallesFacturas;


    public function __construct()
    {
        $this->movimientosdepositos = new ArrayCollection();
        $this->detallesFacturas = new ArrayCollection();
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

   
}
