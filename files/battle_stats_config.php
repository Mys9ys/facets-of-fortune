<?php
$arr = [
    ['name'=>'Атака оружием', 'index' => 'attack_weapon', 'min' => 1, 'max' => 3],
    ['name'=>'Атака магией', 'index' => 'attack_magic', 'min' => 0, 'max' => 0],
    ['name'=>'Защита от оружия', 'index' => 'defense_weapon', 'min' => 0, 'max' => 0],
    ['name'=>'Защита от магии', 'index' => 'defense_magic', 'min' => 0, 'max' => 0],
];

$fp = fopen('battle_stats.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);
//battle_stats