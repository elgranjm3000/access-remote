<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovimientosDepositosRepository")
 */
class MovimientosDepositos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

  

    /**
     * @ORM\Column(type="date")
     */
    private $fechaMovimiento;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $monto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banco;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facturas", inversedBy="movimientosdepositos")
     */
    private $facturas;


    protected $idfacturarelacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ndeposito;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Facturas[]
     */
    public function getIdFactura(): Collection
    {
        return $this->idFactura;
    }

    public function addIdFactura(Facturas $idFactura): self
    {
        if (!$this->idFactura->contains($idFactura)) {
            $this->idFactura[] = $idFactura;
            $idFactura->setMovimientosDepositos($this);
        }

        return $this;
    }

    public function removeIdFactura(Facturas $idFactura): self
    {
        if ($this->idFactura->contains($idFactura)) {
            $this->idFactura->removeElement($idFactura);
            // set the owning side to null (unless already changed)
            if ($idFactura->getMovimientosDepositos() === $this) {
                $idFactura->setMovimientosDepositos(null);
            }
        }

        return $this;
    }

    public function getFechaMovimiento(): ?\DateTimeInterface
    {
        return $this->fechaMovimiento;
    }

    public function setFechaMovimiento(\DateTimeInterface $fechaMovimiento): self
    {
        $this->fechaMovimiento = $fechaMovimiento;

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

    public function getBanco(): ?string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    public function getFacturas(): ?Facturas
    {
        return $this->facturas;
    }

    public function setFacturas(?Facturas $facturas): self
    {
        $this->facturas = $facturas;

        return $this;
    }

     public function getIdfacturarelacion()
    {
        return $this->idfacturarelacion;
    }

    public function setIdfacturarelacion($idfacturarelacion)
    {
        $this->idfacturarelacion = $idfacturarelacion;

        return $this;
    }

    public function getNdeposito(): ?string
    {
        return $this->ndeposito;
    }

    public function setNdeposito(string $ndeposito): self
    {
        $this->ndeposito = $ndeposito;

        return $this;
    }
}
