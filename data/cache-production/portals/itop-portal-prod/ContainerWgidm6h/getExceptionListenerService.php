<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Combodo\iTop\Portal\EventListener\ExceptionListener' shared autowired service.

include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/EventListener/ExceptionListener.php';

$this->services['Combodo\\iTop\\Portal\\EventListener\\ExceptionListener'] = $instance = new \Combodo\iTop\Portal\EventListener\ExceptionListener();

$instance->setContainer($this);

return $instance;