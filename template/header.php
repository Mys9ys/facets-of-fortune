<link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/template/style.min.css">
<?require_once 'config_header.php'?>

<div class="header_container">
    <div class="header">
        <?php $Hero = $arHeader['heroInfo']?>
        <img class="hero_img" src="/img/hero.png" alt="">
        <div class="hero_info_block">
            <div class="hero_nickname"><?=$Hero['nickname']?></div>
            <div class="hero_lvl">lvl: <?=$Hero['lvl']?></div>
            <div class="hero_hp"><?=$Hero['hp']?>/<?=$Hero['hp_now']?></div>
            <div class="hero_xp"><?=$Hero['xp']?></div>
        </div>
        <div class="money_block">
            <?php foreach ($arHeader['money'] as $money):?>
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
