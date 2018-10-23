<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProveedoresRepository")
 */
class Proveedores
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
    private $nombreEmpresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contacto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefonoMovil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefonoOfic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefonoParticular;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ingresos", mappedBy="proveedor")
     */
    private $ingresos;

    public function __construct()
    {
        $this->ingresos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEmpresa(): ?string
    {
        return $this->nombreEmpresa;
    }

    public function setNombreEmpresa(string $nombreEmpresa): self
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    public function getContacto(): ?string
    {
        return $this->contacto;
    }

    public function setContacto(string $contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getTelefonoMovil(): ?string
    {
        return $this->telefonoMovil;
    }

    public function setTelefonoMovil(string $telefonoMovil): self
    {
        $this->telefonoMovil = $telefonoMovil;

        return $this;
    }

    public function getTelefonoOfic(): ?string
    {
        return $this->telefonoOfic;
    }

    public function setTelefonoOfic(string $telefonoOfic): self
    {
        $this->telefonoOfic = $telefonoOfic;

        return $this;
    }

    public function getTelefonoParticular(): ?string
    {
        return $this->telefonoParticular;
    }

    public function setTelefonoParticular(string $telefonoParticular): self
    {
        $this->telefonoParticular = $telefonoParticular;

        return $this;
    }

    /**
     * @return Collection|Ingresos[]
     */
    public function getIngresos(): Collection
    {
        return $this->ingresos;
    }

    public function addIngreso(Ingresos $ingreso): self
    {
        if (!$this->ingresos->contains($ingreso)) {
            $this->ingresos[] = $ingreso;
            $ingreso->setProveedor($this);
        }

        return $this;
    }

    public function removeIngreso(Ingresos $ingreso): self
    {
        if ($this->ingresos->contains($ingreso)) {
            $this->ingresos->removeElement($ingreso);
            // set the owning side to null (unless already changed)
            if ($ingreso->getProveedor() === $this) {
                $ingreso->setProveedor(null);
            }
        }

        return $this;
    }

      public function __toString()
   {
      return strval($this->getId());
   }
}
