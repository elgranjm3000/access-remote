<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.2rCeHXu' shared service.

return $this->privates['.service_locator.2rCeHXu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('agruparproductoRepository' => function (): \App\Repository\AgruparproductoRepository {
    return ($this->privates['App\Repository\AgruparproductoRepository'] ?? $this->load('getAgruparproductoRepositoryService.php'));
}, 'factura' => function (): \App\Entity\Facturas {
    return ($this->privates['.errored..service_locator.2rCeHXu.App\Entity\Facturas'] ?? $this->load('getFacturasService.php'));
}));