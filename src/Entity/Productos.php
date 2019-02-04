<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $costo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $precioVenta;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @ORM\OneToMany(targetEntity="App\Entity\DetallesFactura", mappedBy="idproducto",cascade={"persist", "remove"})
     */
    private $detallesFacturas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ingresos", mappedBy="productos",cascade={"persist", "remove"})
     */
    private $ingresos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ensamble", mappedBy="idproducto",cascade={"persist", "remove"})
     */
    private $ensambles;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaensamble;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ensamble", mappedBy="productoadd",cascade={"persist", "remove"})
     */
    private $emsablesaddproductos;

      /**
     * @Assert\File(
     *     maxSize = "1024k",
     *     maxSizeMessage = "Votre fichier est trop gros ({{ size }}). La taille maximum autorisée est : {{ limit }}"
     * )
     */
   protected $archivo;

   /**
    * @ORM\OneToMany(targetEntity="App\Entity\Agruparproducto", mappedBy="idproducto")
    */
   private $agruparproductos;

 /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $max;

     /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $min;

    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $totalemsable;


    public function __construct()
    {
        $this->detallesFacturas = new ArrayCollection();
        $this->ingresos = new ArrayCollection();
        $this->ensambles = new ArrayCollection();
        $this->emsablesaddproductos = new ArrayCollection();
        $this->agruparproductos = new ArrayCollection();
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

     
        $this->brochure = $brochure;

        return $this;
      
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
                $ingreso->setProductos($this);
            }

            return $this;
        }

        public function removeIngreso(Ingresos $ingreso): self
        {
            if ($this->ingresos->contains($ingreso)) {
                $this->ingresos->removeElement($ingreso);
                // set the owning side to null (unless already changed)
                if ($ingreso->getProductos() === $this) {
                    $ingreso->setProductos(null);
                }
            }

            return $this;
        }

        

        public function getFechaensamble(): ?\DateTimeInterface
        {
            return $this->fechaensamble;
        }

        public function setFechaensamble(?\DateTimeInterface $fechaensamble): self
        {
            $this->fechaensamble = $fechaensamble;

            return $this;
        }

        /**
         * @return Collection|Ensamble[]
         */
        public function getEnsambles(): Collection
        {
            return $this->ensambles;
        }

        public function addEnsamble(Ensamble $ensamble): self
        {
            if (!$this->ensambles->contains($ensamble)) {
                $this->ensambles[] = $ensamble;
                $ensamble->setIdproducto($this);
            }

            return $this;
        }

        public function removeEnsamble(Ensamble $ensamble): self
        {
            if ($this->ensambles->contains($ensamble)) {
                $this->ensambles->removeElement($ensamble);
                // set the owning side to null (unless already changed)
                if ($ensamble->getIdproducto() === $this) {
                    $ensamble->setIdproducto(null);
                }
            }

            return $this;
        }

        /**
         * @return Collection|Ensamble[]
         */
        public function getEmsablesaddproductos(): Collection
        {
            return $this->emsablesaddproductos;
        }

        public function addEmsablesaddproducto(Ensamble $emsablesaddproducto): self
        {
            if (!$this->emsablesaddproductos->contains($emsablesaddproducto)) {
                $this->emsablesaddproductos[] = $emsablesaddproducto;
                $emsablesaddproducto->setProductoadd($this);
            }

            return $this;
        }

        public function removeEmsablesaddproducto(Ensamble $emsablesaddproducto): self
        {
            if ($this->emsablesaddproductos->contains($emsablesaddproducto)) {
                $this->emsablesaddproductos->removeElement($emsablesaddproducto);
                // set the owning side to null (unless already changed)
                if ($emsablesaddproducto->getProductoadd() === $this) {
                    $emsablesaddproducto->setProductoadd(null);
                }
            }

            return $this;
        }

  public function getArchivo(): ?string
    {
        return $this->archivo;
    }

    public function setArchivo(string $archivo): self
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * @return Collection|Agruparproducto[]
     */
    public function getAgruparproductos(): Collection
    {
        return $this->agruparproductos;
    }

    public function addAgruparproducto(Agruparproducto $agruparproducto): self
    {
        if (!$this->agruparproductos->contains($agruparproducto)) {
            $this->agruparproductos[] = $agruparproducto;
            $agruparproducto->setIdproducto($this);
        }

        return $this;
    }

    public function removeAgruparproducto(Agruparproducto $agruparproducto): self
    {
        if ($this->agruparproductos->contains($agruparproducto)) {
            $this->agruparproductos->removeElement($agruparproducto);
            // set the owning side to null (unless already changed)
            if ($agruparproducto->getIdproducto() === $this) {
                $agruparproducto->setIdproducto(null);
            }
        }

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getTotalemsable(): ?float
    {
        return $this->totalemsable;
    }

    public function setTotalemsable(?float $totalemsable): self
    {
        $this->totalemsable = $totalemsable;

        return $this;
    }




       
}
