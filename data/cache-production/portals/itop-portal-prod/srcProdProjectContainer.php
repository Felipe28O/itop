<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWgidm6h\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWgidm6h/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWgidm6h.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerWgidm6h\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerWgidm6h\srcProdProjectContainer([
    'container.build_hash' => 'Wgidm6h',
    'container.build_id' => '9dc44752',
    'container.build_time' => 1664917905,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWgidm6h');
