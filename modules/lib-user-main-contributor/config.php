<?php

return [
    '__name' => 'lib-user-main-contributor',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-contributor.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-contributor' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-user-main' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'contributor' => [
                    'type' => 'boolean'
                ]
            ]
        ]
    ],
];