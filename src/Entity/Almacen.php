<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlmacenRepository")
 */
class Almacen
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
     * @ORM\Column(type="text",nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ingresos", mappedBy="Almacen")
     */
    private $ingresos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contacto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correo;

    /**
     * @ORM\Column(type="text")
     */
    private $direccion;

    public function __construct()
    {
        $this->ingresos = new ArrayCollection();
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

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }
    
    public function __toString()
    {
        return $this->nombre;
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
            $ingreso->setAlmacen($this);
        }

        return $this;
    }

    public function removeIngreso(Ingresos $ingreso): self
    {
        if ($this->ingresos->contains($ingreso)) {
            $this->ingresos->removeElement($ingreso);
            // set the owning side to null (unless already changed)
            if ($ingreso->getAlmacen() === $this) {
                $ingreso->setAlmacen(null);
            }
        }

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

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }
}
