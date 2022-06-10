<?php
$arr = [
    'equipment' => [
        'sword' => [],
        'shield' => [],
        'armor' => [],
        'pants' => [],
        'helmet' => [],
        'gloves' => [],
        'belt' => [],
        'boots' => [],
    ],
    'jewelry' => [
        'ring' => [
            [],[],[],[],
        ],
        'necklace' => [
            [],
        ],
        'bracelet' => [
            [],[],
        ]
    ]
];

$fp = fopen('equipment.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);