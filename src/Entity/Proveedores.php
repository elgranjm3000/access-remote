<?php

namespace App\Entity;

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
}
