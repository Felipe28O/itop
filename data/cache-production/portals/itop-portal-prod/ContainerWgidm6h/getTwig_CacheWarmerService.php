<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[4].'/lib/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/twig-bundle/CacheWarmer/TemplateCacheCacheWarmer.php';

return $this->services['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(['twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->load('getTwigService.php')) && false ?: '_'});
}]))->withContext('twig.cache_warmer', $this), NULL, []);
