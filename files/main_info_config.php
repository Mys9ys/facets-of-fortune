<?php
$arr = [
    'nickname' => 'Mys9ys',
    'lvl' => 1,
    'hp'=> 10,
    'hp_now' => 10,
    'xp'=> 0,
    'xp_for_up'=> 100
];

$fp = fopen('main_info.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);