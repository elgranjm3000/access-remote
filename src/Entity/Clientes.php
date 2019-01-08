<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientesRepository")
 */
class Clientes
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
     * @ORM\Column(type="string", length=255)
     */
    private $nit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="clientes")
     */
    private $IdUsuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contactoPrincipal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correo;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaNacimiento;

    

    /**
     * @ORM\Column(type="text")
     */
    private $comentarios;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zona;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dpto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $municipio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefonoMovil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefonoLocal;

    /**
     * @ORM\Column(type="text")
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Facturas", mappedBy="idcliente", cascade={"persist", "remove"})
     */
    private $facturas;

    /**
     * @ORM\Column(type="date")
     */
    private $ingreso;

    public function __construct()
    {
        $this->facturas = new ArrayCollection();
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

    public function getNit(): ?string
    {
        return $this->nit;
    }

    public function setNit(string $nit): self
    {
        $this->nit = $nit;

        return $this;
    }

    public function getIdUsuario(): ?User
    {
        return $this->IdUsuario;
    }

    public function setIdUsuario(?User $IdUsuario): self
    {
        $this->IdUsuario = $IdUsuario;

        return $this;
    }

    public function getContactoPrincipal(): ?string
    {
        return $this->contactoPrincipal;
    }

    public function setContactoPrincipal(string $contactoPrincipal): self
    {
        $this->contactoPrincipal = $contactoPrincipal;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

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

    public function getZona(): ?string
    {
        return $this->zona;
    }

    public function setZona(string $zona): self
    {
        $this->zona = $zona;

        return $this;
    }

    public function getDpto(): ?string
    {
        return $this->dpto;
    }

    public function setDpto(string $dpto): self
    {
        $this->dpto = $dpto;

        return $this;
    }

    public function getMunicipio(): ?string
    {
        return $this->municipio;
    }

    public function setMunicipio(string $municipio): self
    {
        $this->municipio = $municipio;

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

    public function getTelefonoLocal(): ?string
    {
        return $this->telefonoLocal;
    }

    public function setTelefonoLocal(string $telefonoLocal): self
    {
        $this->telefonoLocal = $telefonoLocal;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * @return Collection|Facturas[]
     */
    public function getFacturas(): Collection
    {
        return $this->facturas;
    }

    public function addFactura(Facturas $factura): self
    {
        if (!$this->facturas->contains($factura)) {
            $this->facturas[] = $factura;
            $factura->setIdcliente($this);
        }

        return $this;
    }

    public function removeFactura(Facturas $factura): self
    {
        if ($this->facturas->contains($factura)) {
            $this->facturas->removeElement($factura);
            // set the owning side to null (unless already changed)
            if ($factura->getIdcliente() === $this) {
                $factura->setIdcliente(null);
            }
        }

        return $this;
    }
     public function __toString()
    {
        return $this->nombre;
    }

     public function getIngreso(): ?\DateTimeInterface
     {
         return $this->ingreso;
     }

     public function setIngreso(\DateTimeInterface $ingreso): self
     {
         $this->ingreso = $ingreso;

         return $this;
     }
}
