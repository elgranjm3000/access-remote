<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.I1IHNBi' shared service.

return $this->privates['.service_locator.I1IHNBi'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('facturasRepository' => function (): \App\Repository\FacturasRepository {
    return ($this->privates['App\Repository\FacturasRepository'] ?? $this->load('getFacturasRepositoryService.php'));
}, 'user1Repository' => function (): \App\Repository\User1Repository {
    return ($this->privates['App\Repository\User1Repository'] ?? $this->load('getUser1RepositoryService.php'));
}));