<?php
$arr['sword_1'] = [
    'name' => 'Простой меч',
    'type' => 'equip',
    'class' =>'sword',
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

$arr['shield_1'] = [
    'name' => 'Простой щит',
    'type' => 'equip',
    'class' =>'shield',
    'faces' => [
        ['defence' => 0],
        ['defence' => 0],
        ['defence' => 1],
        ['defence' => 1],
    ],
    'min' => 0,
    'max' => 1,
    'img'=> 'img/equip/shield/shield_1.png'

];

$fp = fopen('equipments.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);

