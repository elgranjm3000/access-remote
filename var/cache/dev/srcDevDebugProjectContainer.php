<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMPIVqBH\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMPIVqBH/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMPIVqBH.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMPIVqBH\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerMPIVqBH\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'MPIVqBH',
    'container.build_id' => 'c1405a1a',
    'container.build_time' => 1541125952,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerMPIVqBH');
