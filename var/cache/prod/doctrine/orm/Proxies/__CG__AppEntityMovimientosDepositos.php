<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MovimientosDepositos extends \App\Entity\MovimientosDepositos implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'fechaMovimiento', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'monto', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'banco', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'facturas', 'idfacturarelacion', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'ndeposito'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'fechaMovimiento', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'monto', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'banco', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'facturas', 'idfacturarelacion', '' . "\0" . 'App\\Entity\\MovimientosDepositos' . "\0" . 'ndeposito'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MovimientosDepositos $proxy) {
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
    public function getIdFactura(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFactura', []);

        return parent::getIdFactura();
    }

    /**
     * {@inheritDoc}
     */
    public function addIdFactura(\App\Entity\Facturas $idFactura): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIdFactura', [$idFactura]);

        return parent::addIdFactura($idFactura);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIdFactura(\App\Entity\Facturas $idFactura): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIdFactura', [$idFactura]);

        return parent::removeIdFactura($idFactura);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaMovimiento(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaMovimiento', []);

        return parent::getFechaMovimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaMovimiento(\DateTimeInterface $fechaMovimiento): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaMovimiento', [$fechaMovimiento]);

        return parent::setFechaMovimiento($fechaMovimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonto(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonto', []);

        return parent::getMonto();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonto(float $monto): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonto', [$monto]);

        return parent::setMonto($monto);
    }

    /**
     * {@inheritDoc}
     */
    public function getBanco(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBanco', []);

        return parent::getBanco();
    }

    /**
     * {@inheritDoc}
     */
    public function setBanco(string $banco): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBanco', [$banco]);

        return parent::setBanco($banco);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacturas(): ?\App\Entity\Facturas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacturas', []);

        return parent::getFacturas();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacturas(?\App\Entity\Facturas $facturas): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacturas', [$facturas]);

        return parent::setFacturas($facturas);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdfacturarelacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfacturarelacion', []);

        return parent::getIdfacturarelacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdfacturarelacion($idfacturarelacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdfacturarelacion', [$idfacturarelacion]);

        return parent::setIdfacturarelacion($idfacturarelacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNdeposito(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNdeposito', []);

        return parent::getNdeposito();
    }

    /**
     * {@inheritDoc}
     */
    public function setNdeposito(string $ndeposito): \App\Entity\MovimientosDepositos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNdeposito', [$ndeposito]);

        return parent::setNdeposito($ndeposito);
    }

}
