<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PGhsZLE' shared service.

return $this->privates['.service_locator.PGhsZLE'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('cliente' => function (): \App\Entity\Clientes {
    return ($this->privates['.errored..service_locator.PGhsZLE.App\Entity\Clientes'] ?? $this->load('getClientesService.php'));
}));