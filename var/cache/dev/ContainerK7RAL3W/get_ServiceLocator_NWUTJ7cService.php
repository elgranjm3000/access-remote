<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.NWUTJ7c' shared service.

return $this->privates['.service_locator.NWUTJ7c'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('meta' => function (): \App\Entity\Metas {
    return ($this->privates['.errored..service_locator.NWUTJ7c.App\Entity\Metas'] ?? $this->load('getMetasService.php'));
}));