<?php
$arr = [
    ['name' => 'Цитадель', 'img' => '/img/buildings/citadel.png', 'npc' =>[0]],
    ['name' => 'Арена', 'img' => '/img/buildings/arena.png', 'npc' =>[1]]
];

$fp = fopen('location.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);