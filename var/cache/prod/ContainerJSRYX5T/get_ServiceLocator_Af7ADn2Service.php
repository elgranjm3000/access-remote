<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Af7ADn2' shared service.

return $this->privates['.service_locator.Af7ADn2'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('familium' => function (): \App\Entity\Familia {
    return ($this->privates['.errored..service_locator.Af7ADn2.App\Entity\Familia'] ?? $this->load('getFamiliaService.php'));
}));
