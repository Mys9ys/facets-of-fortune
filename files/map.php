<?php
$arr = [
    '5_0' => ['name' => 'город Бумбург', 'img' => '/img/region/city.png', 'id' => 0],
    '4_1' => ['name' => 'Шахта', 'img' => '/img/region/mine.png', 'id' => 1],
    '4_0' => ['name' => 'Перелесок', 'img' => '/img/region/wood.png', 'id' => 2],
    '6_0' => ['name' => 'Сад', 'img' => '/img/region/garden.png', 'id' => 3]
];

$fp = fopen('map.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);