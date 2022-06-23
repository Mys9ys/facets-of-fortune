<?php
$arr = [
    ['name' => 'Старейшина Марвус Ошклейн', 'img' => '/img/npc/marvus.png', 'quests' =>[0]],
    ['name' => 'Мастер боевых искусств Тодеус Микаэль', 'img' => '/img/npc/todeus.png', 'quests' =>[0]]
];

$fp = fopen('npc.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);