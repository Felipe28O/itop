<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.assets_install' shared service.

include_once $this->targetDirs[4].'/lib/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/AssetsInstallCommand.php';
include_once $this->targetDirs[4].'/lib/symfony/filesystem/Filesystem.php';

$this->services['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});

$instance->setName('assets:install');

return $instance;
