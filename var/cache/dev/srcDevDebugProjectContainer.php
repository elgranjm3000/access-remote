<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRxdXexE\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRxdXexE/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRxdXexE.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRxdXexE\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRxdXexE\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'RxdXexE',
    'container.build_id' => '379f70ab',
    'container.build_time' => 1539807993,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRxdXexE');