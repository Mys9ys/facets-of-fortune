<?php
$arr = [
    ['name'=>'Собиратель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Сбор грибов, ягод и трав'],
    ['name'=>'Шахтер', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Добыча полезных ископаемых'],
    ['name'=>'Лесоруб', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Рубка древесины различных видов'],
    ['name'=>'Охотник', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Добыча полезных ингредиентов из животных'],
    ['name'=>'Изготовитель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Производство амуниции по рецептам'],
    ['name'=>'Алхимик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Создание зелий и отваров'],
    ['name'=>'Повар', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Создание вкусностей и пива'],
    ['name'=>'Фабрикант', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Обработка древесины и руд'],
    ['name'=>'Разборщик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0, 'desc' => 'Разбор амуниции для получения камней усиления и рецептов'],

];

$fp = fopen('craft_stats.json','w');
fwrite($fp, json_encode($arr));
fclose($fp);
//craft_stats