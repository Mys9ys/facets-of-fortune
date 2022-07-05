<?php
$arr = [
    'xp_potion_10' =>[ 'name' => 'зелье опыта 10 ед.', 'type' => 'potion', 'class' => 'xp_potion', 'img' => 'img/potion/10xp.png', 'index' => 'xp_potion_10'],

];

$fp = fopen('potion.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);