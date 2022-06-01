<?php
$arr['currant'] = [
    'name' => 'Смородина', 'type' => 'resources', 'class' => 'berry', 'img' => 'img/resources/berry/currant.png', 'index' => 'currant'

];

$arr['coal'] = [
    'name' => 'Уголь', 'type' => 'resources', 'class' =>'extraction', 'img'=> 'img/resources/extraction/coal.png', 'index' => 'coal'
];

$fp = fopen('resources.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);