<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY7X3j9M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY7X3j9M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY7X3j9M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY7X3j9M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerY7X3j9M\App_KernelDevDebugContainer([
    'container.build_hash' => 'Y7X3j9M',
    'container.build_id' => '52257a0a',
    'container.build_time' => 1645267792,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY7X3j9M');
