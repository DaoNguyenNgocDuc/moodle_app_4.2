<?php

$addons = [
    'local_hello' => [
        'handlers' => [
            'hello' => [
                'delegate' => 'CoreMainMenuDelegate',
                'method' => 'view_hello',
                'displaydata' => [
                    'title' => 'hello',
                    'icon' => 'earth',
                ],
            ],
        ],
        'lang' => [
            ['hello', 'local_hello'],
        ],
    ],
];
