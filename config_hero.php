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
        ['name'=>'Скорость', 'index' => 'speed', 'count' => 0, 'desc' => 'Скорость передвижения/крафта'],
        ['name'=>'Уворот', 'index' => 'avoid', 'count' => 0, 'desc' => 'Возможность избежать удара противника'],
        ['name'=>'Критический удар', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Удвоение атаки'],
        ['name'=>'Сглаз', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Снижение атаки противника в 2 раза'],
        ['name'=>'Контратака', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Нанесение противнику половину урона нанесенного им'],
        ['name'=>'Вампиризм', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Восстановление собственной жизни: половина от силы атаки'],
        ['name'=>'Разрушение брони', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Снижение защиты врага в 2 раза'],
        ['name'=>'Заживление', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Восстановление собственного здоровья'],
        ['name'=>'Кровотечение', 'index' => 'defense_magic', 'count' => 0, 'desc' => 'Снижение здоровья противника в хп за ход'],


    ],
    'heroCraft' => [
        ['name'=>'Собиратель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Шахтер', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Лесоруб', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Изготовитель', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Алхимик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
        ['name'=>'Разборщик', 'index' => 'defense_magic', 'count' => 0, 'lvl'=>0],
    ],
];

//$arHero['bagCount'] = 32;
//$arHero['bagEmpty'] = $arHero['bagCount'] - count($arHero['heroEquipments']) - count($arHero['heroResources']);
//
//if($arHero['bagCount'] % 10 === 0 ){
//    $arHero['bagLock'] = 10;
//} else {
//    $arHero['bagLock'] = 10 + 10 - $arHero['bagCount'] % 10;
//}

//$arHero['heroRucksack'] = array_merge($arHero['heroEquipments'], $arHero['heroResources']);
