<?php
$arr = [
    [
        ['id' => 0, 'name' => 'Цитадель', 'img' => '/img/buildings/citadel.png', 'npc' => [0]],
        ['id' => 1, 'name' => 'Арена', 'img' => '/img/buildings/arena.png', 'npc' => [1]]
    ],

];

$fp = fopen('region.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);