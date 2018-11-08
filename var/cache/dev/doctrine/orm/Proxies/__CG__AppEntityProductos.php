<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Productos extends \App\Entity\Productos implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'costo', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'precioVenta', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'comentarios', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'cantidadPresentacion', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'idfamilia', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'idmedidas', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'brochure', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'detallesFacturas', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'ingresos', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'ensambles', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'fechaensamble', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'emsablesaddproductos', 'archivo'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'costo', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'precioVenta', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'comentarios', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'cantidadPresentacion', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'idfamilia', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'idmedidas', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'brochure', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'detallesFacturas', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'ingresos', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'ensambles', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'fechaensamble', '' . "\0" . 'App\\Entity\\Productos' . "\0" . 'emsablesaddproductos', 'archivo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Productos $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $nombre): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadMedida(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadMedida', []);

        return parent::getUnidadMedida();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidadMedida(string $unidadMedida): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidadMedida', [$unidadMedida]);

        return parent::setUnidadMedida($unidadMedida);
    }

    /**
     * {@inheritDoc}
     */
    public function getCosto(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCosto', []);

        return parent::getCosto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCosto(float $costo): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCosto', [$costo]);

        return parent::setCosto($costo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecioVenta(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecioVenta', []);

        return parent::getPrecioVenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecioVenta(float $precioVenta): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecioVenta', [$precioVenta]);

        return parent::setPrecioVenta($precioVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarios(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarios', []);

        return parent::getComentarios();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentarios(string $comentarios): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentarios', [$comentarios]);

        return parent::setComentarios($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidadPresentacion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidadPresentacion', []);

        return parent::getCantidadPresentacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidadPresentacion(string $cantidadPresentacion): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidadPresentacion', [$cantidadPresentacion]);

        return parent::setCantidadPresentacion($cantidadPresentacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdfamilia(): ?\App\Entity\Familia
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfamilia', []);

        return parent::getIdfamilia();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdfamilia(?\App\Entity\Familia $idfamilia): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdfamilia', [$idfamilia]);

        return parent::setIdfamilia($idfamilia);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmedidas(): ?\App\Entity\Medidas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmedidas', []);

        return parent::getIdmedidas();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmedidas(?\App\Entity\Medidas $idmedidas): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmedidas', [$idmedidas]);

        return parent::setIdmedidas($idmedidas);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrochure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrochure', []);

        return parent::getBrochure();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrochure($brochure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrochure', [$brochure]);

        return parent::setBrochure($brochure);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getDetallesFacturas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetallesFacturas', []);

        return parent::getDetallesFacturas();
    }

    /**
     * {@inheritDoc}
     */
    public function addDetallesFactura(\App\Entity\DetallesFactura $detallesFactura): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetallesFactura', [$detallesFactura]);

        return parent::addDetallesFactura($detallesFactura);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetallesFactura(\App\Entity\DetallesFactura $detallesFactura): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetallesFactura', [$detallesFactura]);

        return parent::removeDetallesFactura($detallesFactura);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresos', []);

        return parent::getIngresos();
    }

    /**
     * {@inheritDoc}
     */
    public function addIngreso(\App\Entity\Ingresos $ingreso): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIngreso', [$ingreso]);

        return parent::addIngreso($ingreso);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIngreso(\App\Entity\Ingresos $ingreso): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIngreso', [$ingreso]);

        return parent::removeIngreso($ingreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaensamble(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaensamble', []);

        return parent::getFechaensamble();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaensamble(?\DateTimeInterface $fechaensamble): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaensamble', [$fechaensamble]);

        return parent::setFechaensamble($fechaensamble);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnsambles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnsambles', []);

        return parent::getEnsambles();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnsamble(\App\Entity\Ensamble $ensamble): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnsamble', [$ensamble]);

        return parent::addEnsamble($ensamble);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnsamble(\App\Entity\Ensamble $ensamble): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnsamble', [$ensamble]);

        return parent::removeEnsamble($ensamble);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmsablesaddproductos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmsablesaddproductos', []);

        return parent::getEmsablesaddproductos();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmsablesaddproducto(\App\Entity\Ensamble $emsablesaddproducto): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmsablesaddproducto', [$emsablesaddproducto]);

        return parent::addEmsablesaddproducto($emsablesaddproducto);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmsablesaddproducto(\App\Entity\Ensamble $emsablesaddproducto): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmsablesaddproducto', [$emsablesaddproducto]);

        return parent::removeEmsablesaddproducto($emsablesaddproducto);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivo', []);

        return parent::getArchivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivo(string $archivo): \App\Entity\Productos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivo', [$archivo]);

        return parent::setArchivo($archivo);
    }

}
