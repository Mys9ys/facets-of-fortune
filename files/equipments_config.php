<?php
$arr['sword_1'] = [
    'name' => 'Простой меч',
    'type' => 'equip',
    'class' =>'swords',
    'faces' => [
        ['attack' => 1],
        ['attack' => 1],
        ['attack' => 2],
        ['attack' => 3],
    ],
    'min' => 1,
    'max' => 3,
    'img'=> 'img/equip/sword/sword_1.png'

];

$arr['sword_2'] = [
    'name' => 'Простой меч',
    'type' => 'equip',
    'class' =>'swords',
    'faces' => [
        ['attack' => 1],
        ['attack' => 1],
        ['attack' => 2],
        ['attack' => 3],
    ],
    'min' => 1,
    'max' => 3,
    'img'=> 'img/equip/sword/sword_1.png'

];

$fp = fopen('equipments.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);

