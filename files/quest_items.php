<?php
$arr = [
    'marvus_scroll' =>[ 'name' => 'Предписание Марвуса', 'type' => 'quest_items', 'class' => 'scroll', 'img' => 'img/quest/q1_scroll.png', 'index' => 'marvus_scroll'],

];

$fp = fopen('potion.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);