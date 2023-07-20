<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'csrf_protection' => true,
    'session' => [
        'storage_factory_id' => 'session.storage.factory.native',
        'handler_id' => null,
    ],
]);
