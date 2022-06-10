<?php
$arr = [
    'skills' => [
        ['name'=>'Сила', 'index' => 'power', 'count' => 0],
        ['name'=>'Магия', 'index' => 'magic', 'count' => 0],
        ['name'=>'Инициатива', 'index' => 'initiative', 'count' => 0],
        ['name'=>'Скорость', 'index' => 'speed', 'count' => 0, 'desc' => 'Скорость передвижения/крафта'],
    ],
    'skill_up' => 1,
];

$fp = fopen('skills.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);
//hero_skills