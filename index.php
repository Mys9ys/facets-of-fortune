<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facets of Fortune</title>
    <link rel="stylesheet" href="/style.min.css">

</head>
<body>
<? use classes\Rucksack;

require_once 'config_hero.php' ?>
<? require_once 'template/header.php' ?>
<div class="game_container">

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
        <div class="skills_att_def_block">
            <div class="skills_block">
                <?php foreach ($arHero['heroSkills'] as $skill): ?>
                    <div class="skills_position" data-type="<?= $skill['index'] ?>">
                        <div class="skills_name"><?= $skill['name'] ?></div>
                        <div class="skills_count_box">
                            <div class="skills_count"><?= $skill['count'] ?></div>
                            <div class="skills_up <?php if ($arHero['skill_up']) echo 'skills_up_vis' ?>">+</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="attack_defence_desc_block">
                <?php foreach ($arHero['heroAttackDefence'] as $elem): ?>
                    <div class="add_position" data-type="<?= $elem['index'] ?>">
                        <div class="add_name"><?= $elem['name'] ?></div>
                        <div class="add_count_box">
                            <div class="add_count"><?= $elem['min'] . '-' . $elem['max'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="property_block">
            <?php foreach ($arHero['heroProperty'] as $prop): ?>
                <div class="prop_position" data-type="<?= $prop['index'] ?>">
                    <div class="prop_name"><?= $prop['name'] ?></div>
                    <div class="prop_count_box">
                        <div class="prop_count"><?= $prop['count'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="craft_block">
            <?php foreach ($arHero['heroCraft'] as $prop): ?>
                <div class="craft_position" data-type="<?= $prop['index'] ?>">
                    <div class="craft_name"><?= $prop['name'] ?></div>
                    <div class="craft_count_box">
                        <div class="craft_lvl"><?= $prop['lvl'] ?></div>
                        <div class="craft_count"><?= $prop['count'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="rucksack_block">
            <div class="rucksack_tabs">
                <div class="rucksack_tab">all</div>
                <div class="rucksack_tab">weap</div>
                <div class="rucksack_tab">res</div>
                <div class="rucksack_tab">quest</div>
            </div>
            <div class="rucksack_items">

                <?$rucksack = new Rucksack();
                $arRucksack = $rucksack->getItems();
                ?>
                <?php foreach ($arRucksack as $item): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_item_img" src="<?= $item['img'] ?>" alt="" title="<?= $item['name'] ?>">
                        <div class="rucksack_item_count"><?= $item['count'] ?></div>
                    </div>
                <?php endforeach; ?>

                <?php for ($i = 0; $i < $rucksack->bagEmpty; $i++): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_bag_empty" src="/img/resources/bag.png" alt="">
                    </div>
                <?php endfor; ?>
                <?php for ($i = 0; $i < $rucksack->bagLock; $i++): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_bag_empty" src="/img/resources/bag_lock.png" alt="">
                    </div>
                <?php endfor; ?>

            </div>


        </div>


    </div>
</div>

</body>
</html>
