<?php
$arHero = [
    'heroInfo' => [
        'nickname' => 'Mys9ys',
        'lvl' => 1,
        'hp'=> 10,
        'hp_now' => 10,
        'xp'=> 0
    ],
    'money' => [
        ['name'=> 'Золото', 'index'=>'gold', 'count'=> 5],
        ['name'=> 'Серебро', 'index'=>'silver', 'count'=> 50],
        ['name'=> 'Медь', 'index'=>'cuprum', 'count'=> 122],
    ],
    'heroSkills' => [
        ['name'=>'Сила', 'index' => 'power', 'count' => 0],
        ['name'=>'Магия', 'index' => 'magic', 'count' => 0],
        ['name'=>'Инициатива', 'index' => 'initiative', 'count' => 0],
    ],
    'skill_up' => 1,
    'heroAttackDefence' => [
        ['name'=>'Атака оружием', 'index' => 'attack_weapon', 'min' => 1, 'max' => 3],
        ['name'=>'Атака магией', 'index' => 'attack_magic', 'min' => 0, 'max' => 0],
        ['name'=>'Защита от оружия', 'index' => 'defense_weapon', 'min' => 0, 'max' => 0],
        ['name'=>'Защита от магии', 'index' => 'defense_magic', 'min' => 0, 'max' => 0],
    ],
    'heroProperty' => [
        ['name'=>'Скорость', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Уворот', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Критический удар', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Заживление', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Кровотечение', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Пробитие брони', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Скорость', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Скорость', 'index' => 'defense_magic', 'count' => 0],
        ['name'=>'Скорость', 'index' => 'defense_magic', 'count' => 0],
    ],
    'heroCraft' => [
        ['name'=>'Собиратель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Шахтер', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Лесоруб', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Изготовитель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Алхимик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Разборщик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
    ],
    'heroEquipments' => [
        ['name' => 'Меч', 'type' => 'equip', 'class' =>'swords',  'img'=> 'img/equip/sword/sword_1.png', 'index' => 'sword_1', 'count' => 1]
    ],
    'heroResources' => [
        ['name' => 'Смородина', 'type' => 'resources', 'class' =>'berry', 'img'=> 'img/resources/berry/currant.png', 'index' => 'currant', 'count' => 12],
        ['name' => 'Уголь', 'type' => 'resources', 'class' =>'extraction', 'img'=> 'img/resources/extraction/coal.png', 'index' => 'coal', 'count' => 1222]
    ]
];

$arHero['bagCount'] = 32;
$arHero['bagEmpty'] = $arHero['bagCount'] - count($arHero['heroEquipments']) - count($arHero['heroResources']);

if($arHero['bagCount'] % 10 === 0 ){
    $arHero['bagLock'] = 10;
} else {
    $arHero['bagLock'] = 10 + 10 - $arHero['bagCount'] % 10;
}

$arHero['heroRucksack'] = array_merge($arHero['heroEquipments'], $arHero['heroResources']);

$arSwords['sword_1'] = [
    'faces' => [
        ['attack' => 1],
        ['attack' => 1],
        ['attack' => 2],
        ['attack' => 3],
    ],
    'min' => 1,
    'max' => 3
];


