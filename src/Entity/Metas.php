<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MetasRepository")
 */
class Metas
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
    private $desde;

    /**
     * @ORM\Column(type="date")
     */
    private $hasta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="metas")
     */
    private $usuario;

    /**
     * @ORM\Column(type="float")
     */
    private $montoventas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesde(): ?\DateTimeInterface
    {
        return $this->desde;
    }

    public function setDesde(\DateTimeInterface $desde): self
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta(): ?\DateTimeInterface
    {
        return $this->hasta;
    }

    public function setHasta(\DateTimeInterface $hasta): self
    {
        $this->hasta = $hasta;

        return $this;
    }

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(?User $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getMontoventas(): ?float
    {
        return $this->montoventas;
    }

    public function setMontoventas(float $montoventas): self
    {
        $this->montoventas = $montoventas;

        return $this;
    }
}
