<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.UGPvOKO' shared service.

return $this->privates['.service_locator.UGPvOKO'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('movimientosDeposito' => function (): \App\Entity\MovimientosDepositos {
    return ($this->privates['.errored..service_locator.UGPvOKO.App\Entity\MovimientosDepositos'] ?? $this->load('getMovimientosDepositosService.php'));
}, 'movimientosDepositosRepository' => function (): \App\Repository\MovimientosDepositosRepository {
    return ($this->privates['App\Repository\MovimientosDepositosRepository'] ?? $this->load('getMovimientosDepositosRepositoryService.php'));
}));