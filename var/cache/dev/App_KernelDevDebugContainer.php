<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3QoJEGd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3QoJEGd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3QoJEGd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3QoJEGd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3QoJEGd\App_KernelDevDebugContainer([
    'container.build_hash' => '3QoJEGd',
    'container.build_id' => '3ada3968',
    'container.build_time' => 1677669682,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3QoJEGd');