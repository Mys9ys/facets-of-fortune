<?php
$arr = [
    ['name'=>'Уворот', 'index' => 'avoid', 'count' => 0, 'desc' => 'Возможность избежать удара противника'],
    ['name'=>'Критический удар', 'index' => 'critical', 'count' => 0, 'desc' => 'Удвоение атаки'],
    ['name'=>'Сглаз', 'index' => 'jinx', 'count' => 0, 'desc' => 'Снижение атаки противника в 2 раза'],
    ['name'=>'Контратака', 'index' => 'counterattack', 'count' => 0, 'desc' => 'Нанесение противнику половину урона нанесенного им'],
    ['name'=>'Вампиризм', 'index' => 'vampiring', 'count' => 0, 'desc' => 'Восстановление собственной жизни: половина от силы атаки'],
    ['name'=>'Разрушение брони', 'index' => 'destruction_armor', 'count' => 0, 'desc' => 'Снижение защиты врага в 2 раза'],
    ['name'=>'Заживление', 'index' => 'healing', 'count' => 0, 'desc' => 'Восстановление собственного здоровья'],
    ['name'=>'Кровотечение', 'index' => 'bleeding', 'count' => 0, 'desc' => 'Снижение здоровья противника в хп за ход'],
];

$fp = fopen('additional_skills.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);
//additional_skills
