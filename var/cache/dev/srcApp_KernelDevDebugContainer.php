<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXrYM4FM\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXrYM4FM/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXrYM4FM.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXrYM4FM\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXrYM4FM\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XrYM4FM',
    'container.build_id' => 'b5131502',
    'container.build_time' => 1646557971,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXrYM4FM');
