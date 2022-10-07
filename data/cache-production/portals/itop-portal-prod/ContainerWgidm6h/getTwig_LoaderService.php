<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader' shared service.

include_once $this->targetDirs[4].'/lib/twig/twig/src/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/lib/twig/twig/src/Loader/ExistsLoaderInterface.php';
include_once $this->targetDirs[4].'/lib/twig/twig/src/Loader/SourceContextLoaderInterface.php';
include_once $this->targetDirs[4].'/lib/twig/twig/src/Loader/FilesystemLoader.php';

$this->services['twig.loader'] = $instance = new \Twig\Loader\FilesystemLoader([], ($this->targetDirs[4].'/env-production/itop-portal-base/portal'));

$instance->addPath(($this->targetDirs[4].'/lib/symfony/framework-bundle/Resources/views'), 'Framework');
$instance->addPath(($this->targetDirs[4].'/lib/symfony/framework-bundle/Resources/views'), '!Framework');
$instance->addPath(($this->targetDirs[4].'/lib/symfony/twig-bundle/Resources/views'), 'Twig');
$instance->addPath(($this->targetDirs[4].'/lib/symfony/twig-bundle/Resources/views'), '!Twig');
$instance->addPath(($this->targetDirs[4].'/env-production/'));

return $instance;
