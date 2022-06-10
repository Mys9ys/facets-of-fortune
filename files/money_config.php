<?php
$arr = [
    ['name'=> 'Золото', 'index'=>'gold', 'count'=> 5],
    ['name'=> 'Серебро', 'index'=>'silver', 'count'=> 50],
    ['name'=> 'Медь', 'index'=>'cuprum', 'count'=> 122],
];

$fp = fopen('money.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);