<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWky3kNt\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWky3kNt/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWky3kNt.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWky3kNt\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerWky3kNt\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Wky3kNt',
    'container.build_id' => '1a39fbb3',
    'container.build_time' => 1541539127,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerWky3kNt');
