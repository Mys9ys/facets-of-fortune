<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facets of Fortune</title>
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/template/style.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/jquery-1.8.2.min.js"></script>
    <script src="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php'?>
<?include_once $_SERVER['DOCUMENT_ROOT'] . '/tech_lib/functions.php'?>
<?php
use classes\Hero;
$hero = new Hero()?>
<div class="container">
    <div class="header">

        <?php $arHero = $hero->getHeroSection('main_info')?>
        <img class="hero_img" src="/img/hero.png" alt="">
        <div class="hero_info_block">
            <div class="hero_nickname"><?=$arHero['nickname']?></div>
            <div class="hero_lvl">lvl: <?=$arHero['lvl']?></div>
            <div class="hero_hp"><?=$arHero['hp']?>/<?=$arHero['hp_now']?></div>
            <div class="hero_xp"><?=$arHero['xp']?>/<?=$arHero['xp_for_up']?></div>
        </div>
        <div class="money_block">
            <?php foreach ($hero->getHeroSection('money') as $money):?>
                <div class="money_box">
                    <img class="money_img" src="/img/money/<?=$money['index']?>.png" alt="" title="<?=$money['name']?>"><div class="money_count"><?=$money['count']?></div>
                </div>
            <?php endforeach;?>
        </div>

        <div class="btn_block">
            <a class="header_btn" href="/pages/map">
                <img class="header_btn_img" src="/img/header/map.png" alt="" title="Карта">
            </a>
            <a class="header_btn" href="/pages/equip">
                <img class="header_btn_img" src="/img/header/rucksack.png" alt="" title="Инвентарь">
            </a>
            <a class="header_btn" href="/pages/quests">
                <img class="header_btn_img" src="/img/header/quest.png" alt="" title="Квесты">
            </a>
            <a class="header_btn" href="/pages/battle">
                <img class="header_btn_img" src="/img/header/btn_battle.png" alt="" title="Битва">
            </a>
            <a class="header_btn" href="/pages/labyrinth">
                <img class="header_btn_img" src="/img/header/labyrinth.png" alt="" title="Лабиринт">
            </a>
        </div>
    </div>
</div>
