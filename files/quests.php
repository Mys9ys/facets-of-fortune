<?php
$arr['1'] = [
    'name' => 'Предписание Старейшины',
    'npc' => [
        ['name' => 'Старейшина Марвус Ошклейн', 'img' => '/img/npc/marvus.png'],
        ['name' => 'Мастер боевых искусств Тодеус Микаэль', 'img' => '/img/npc/todeus.png']
    ],
    'dialogs' => [
        [
            'npc' => 0,
            'questions' => ['Добрый день, путник! Что привело тебя в наш город?'],
            'answer' => [
                ['text' => 'Мне бы работенку найти?', 'action' => 'continue'],
                ['text' => 'Просто мимо проходил', 'action' => 'exit'],
            ]
        ],
        [
            'npc' => 0,
            'questions' => ['Ну что ж, охотно возьмем тебя на службу. Вот тебе предписание - явись к мастеру боевых искусств Тодеусу Микаэлю. Он находится на арене.'],
            'answer' => [
                ['text' => 'Спасибо! Уже бегу.', 'action' => 'accept #1'],
                ['text' => 'Может позже...', 'action' => 'exit'],
            ],
            'item' => []
        ],
        [
            'npc' => 1,
            'questions' => ['Кто к нам пожаловал! Что надо, незнакомец?'],
            'answer' => [
                ['text' => 'Вот. У меня тут направление!', 'action' => 'continue'],
                ['text' => 'Простите, я кажется ошибся...', 'action' => 'exit'],
            ]
        ],
        [
            'npc' => 1,
            'questions' => ['Прям как в поликлинике... Давай сюда свою бумажку!'],
            'answer' => [
                ['text' => 'Протягиваете предписание', 'action' => 'continue'],
                ['text' => 'Кажется я его где то оставил', 'action' => 'exit'],
            ]
        ],
        [
            'npc' => 1,
            'questions' => ['Хо хо! Да за тебя сам старейшина просит! Готов к труду и обороне?'],
            'answer' => [
                ['text' => 'Думаю, да!', 'action' => 'done'],
                ['text' => 'Может чуть попозже?', 'action' => 'exit'],
            ]
        ]

    ],
    'reward' => [
        ['class' =>'potion', 'index'=>'xp_potion_10', 'count' => 1],
        ['class'=> 'money', 'index'=>'cuprum', 'count'=>10]

    ],
    'conditions' => [

    ]

];

$fp = fopen('quests.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);