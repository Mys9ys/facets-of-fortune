<?php
$arr = [
    'Equipments' => [
        ['index' => 'sword_1', 'count' => 1],
        ['index' => 'shield_1', 'count' => 1]
    ],
    'Resources' => [
        ['index' => 'currant', 'count' => 12],
        ['index' => 'coal', 'count' => 1222]
    ]
];

$fp = fopen('hero.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);