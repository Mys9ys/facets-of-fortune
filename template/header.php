<link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/template/style.min.css">
<?require_once 'config_header.php'?>
<?include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php'?>
<?include_once $_SERVER['DOCUMENT_ROOT'] . '/tech_lib/functions.php'?>

<?php
use \classes\Hero;
$hero = new Hero()?>
<script src="/vendor/jquery-1.8.2.min.js"></script>

<div class="header_container">
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
            <a class="header_btn" href="/">
                <img class="header_btn_img" src="/img/header/rucksack.png" alt="" title="Инвентарь">
            </a>
            <a class="header_btn" href="/battle">
                <img class="header_btn_img" src="/img/header/btn_battle.png" alt="" title="Битва">
            </a>
            <a class="header_btn" href="/labyrinth">
                <img class="header_btn_img" src="/img/header/labyrinth.png" alt="" title="Лабиринт">
            </a>
        </div>
    </div>
</div>
