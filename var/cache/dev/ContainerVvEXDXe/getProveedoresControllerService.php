<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ProveedoresController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ProveedoresController.php';

$this->services['App\Controller\ProveedoresController'] = $instance = new \App\Controller\ProveedoresController();

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->load('get_ServiceLocator_YchIlgFService.php'))->withContext('App\\Controller\\ProveedoresController', $this));

return $instance;
