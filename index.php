<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facets of Fortune</title>
    <link rel="stylesheet" href="/style.min.css">
</head>
<body>
<?require_once 'config_hero.php'?>
<div class="game_container">
    <div class="header">
        <?php $Hero = $arHero['heroInfo']?>
        <img class="hero_img" src="/img/hero.png" alt="">
        <div class="hero_info_block">
            <div class="hero_nickname"><?=$Hero['nickname']?></div>
            <div class="hero_lvl">lvl: <?=$Hero['lvl']?></div>
            <div class="hero_hp"><?=$Hero['hp']?>/<?=$Hero['hp_now']?></div>
            <div class="hero_xp"><?=$Hero['xp']?></div>
        </div>
    </div>
    <div class="all_information_block">
        <div class="equipment_block">
            <div class="equipment_main">
                <div class="equipment_first">
                    <div class="equipment_item5 equipment_sword">
                        <img class="equipment_item_img" src="/img/equip_temp/sword.png" alt="">
                    </div>
                    <div class="equipment_item4 equipment_shield">
                        <img class="equipment_item_img" src="/img/equip_temp/shield.png" alt="">
                    </div>
                </div>
                <div class="equipment_second">
                    <div class="equipment_item5 equipment_armor">
                        <img class="equipment_item_img" src="/img/equip_temp/armor.png" alt="">
                    </div>
                    <div class="equipment_item4 equipment_pants">
                        <img class="equipment_item_img" src="/img/equip_temp/pants.png" alt="">
                    </div>
                </div>
                <div class="equipment_third">
                    <div class="equipment_item3 equipment_helmet">
                        <img class="equipment_item_img" src="/img/equip_temp/helmet.png" alt="">
                    </div>
                    <div class="equipment_item1">
                        <img class="equipment_item_img" src="/img/equip_temp/gloves.png" alt="">
                    </div>
                    <div class="equipment_item1">
                        <img class="equipment_item_img" src="/img/equip_temp/belt.png" alt="">
                    </div>
                    <div class="equipment_item3">
                        <img class="equipment_item_img" src="/img/equip_temp/boots.png" alt="">
                    </div>
                </div>
            </div>
            <div class="equipment_jewelry">
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item3">
                    <img class="jewelry_item_img" src="/img/equip_temp/necklace.png" alt="">
                </div>
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/bracelet.png" alt="">
                </div>
                <div class="jewelry_item1">
                    <img class="jewelry_item_img" src="/img/equip_temp/bracelet.png" alt="">
                </div>
            </div>
        </div>

        <div class="skills_block">
            <?php foreach ($arHero['heroSkills'] as $skill):?>
                <div class="skills_position" data-type="<?=$skill['index']?>">
                    <div class="skills_name"><?=$skill['name']?></div>
                    <div class="skills_count_box">
                        <div class="skills_count"><?=$skill['count']?></div><div class="skills_up <?php if($arHero['skill_up']) echo 'skills_up_vis'?>">+</div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>


    </div>



</div>
</body>
</html>
