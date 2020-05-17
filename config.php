<?php

return [
    'database' => [
        'test' => [
            'name' => 'blog',
            'user' => 'root',
            'pass' => '',
            'connection' => 'mysql:host=localhost',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ],
        'prod' =>  [
            'name' => 'id13699007_solascriptura',
            'user' => 'id13699007_solauser',
            'pass' => '~0w6(]#qy#h=92Tf',
            'connection' => 'mysql:host=localhost',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ]
];