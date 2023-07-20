<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'serializer' => [
        'enable_annotations' => false,
        'mapping' => [
            'paths' => [
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/serializer_mapping/files',
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/serializer_mapping/serialization.yml',
                '%kernel.project_dir%/Fixtures/TestBundle/Resources/config/serializer_mapping/serialization.yaml',
            ],
        ],
    ],
]);
