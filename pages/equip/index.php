<link rel="stylesheet" href="style.min.css">
<?php
use classes\Equipment;
use classes\Rucksack;

require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'
?>

<div class="game_container">
    <? $ammunition = new Equipment();
    $equipment = $ammunition->getEquipment()['equipment'];
    //    print_debug($equipment);?>
    <div class="all_information_block">
        <div class="equipment_block">
            <div class="equipment_main">
                <div class="equipment_first">
                    <div class="equipment_item5 equipment_sword">
                        <img class="equipment_item_img"
                             src="<?= $equipment['sword']['img'] ?>"
                             title="<?= $equipment['sword']['title'] ?>"
                             data-class="sword">
                    </div>
                    <div class="equipment_item4 equipment_shield">
                        <img class="equipment_item_img"
                             src="<?= $equipment['shield']['img'] ?>"
                             title="<?= $equipment['shield']['title'] ?>"
                             data-class="shield">
                    </div>
                </div>
                <div class="equipment_second">
                    <div class="equipment_item5 equipment_armor">
                        <img class="equipment_item_img"
                             src="<?= $equipment['armor']['img'] ?>"
                             title="<?= $equipment['armor']['title'] ?>"
                             data-class="armor">
                    </div>
                    <div class="equipment_item4 equipment_pants">
                        <img class="equipment_item_img"
                             src="<?= $equipment['pants']['img'] ?>"
                             title="<?= $equipment['pants']['title'] ?>"
                             data-class="pants">
                    </div>
                </div>
                <div class="equipment_third">
                    <div class="equipment_item3 equipment_helmet">
                        <img class="equipment_item_img"
                             src="<?= $equipment['helmet']['img'] ?>"
                             title="<?= $equipment['helmet']['title'] ?>"
                             data-class="helmet">
                    </div>
                    <div class="equipment_item1 equipment_gloves">
                        <img class="equipment_item_img"
                             src="<?= $equipment['gloves']['img'] ?>"
                             title="<?= $equipment['gloves']['title'] ?>"
                             data-class="gloves">
                    </div>
                    <div class="equipment_item1 equipment_belt">
                        <img class="equipment_item_img"
                             src="<?= $equipment['belt']['img'] ?>"
                             title="<?= $equipment['belt']['title'] ?>"
                             data-class="belt">
                    </div>
                    <div class="equipment_item3 equipment_boots">
                        <img class="equipment_item_img"
                             src="<?= $equipment['boots']['img'] ?>"
                             title="<?= $equipment['boots']['title'] ?>"
                             data-class="boots">
                    </div>
                </div>
            </div>
            <div class="equipment_jewelry">
                <div class="jewelry_item1 equipment_ring1">
                    <img class="jewelry_item_img " src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1 equipment_ring2">
                    <img class="jewelry_item_img " src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1 equipment_ring3">
                    <img class="jewelry_item_img " src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item1 equipment_ring4">
                    <img class="jewelry_item_img " src="/img/equip_temp/ring.png" alt="">
                </div>
                <div class="jewelry_item3 equipment_necklace">
                    <img class="jewelry_item_img " src="/img/equip_temp/necklace.png" alt="">
                </div>
                <div class="jewelry_item1 equipment_bracelet1">
                    <img class="jewelry_item_img " src="/img/equip_temp/bracelet.png" alt="">
                </div>
                <div class="jewelry_item1 equipment_bracelet2">
                    <img class="jewelry_item_img " src="/img/equip_temp/bracelet.png" alt="">
                </div>
            </div>
        </div>
        <div class="skills_att_def_block">
            <div class="skills_block">
                <?php $arSkills = $hero->getHeroSection('skills') ?>
                <?php foreach ($arSkills['skills'] as $skill): ?>
                    <div class="skills_position" data-type="<?= $skill['index'] ?>">
                        <div class="skills_name"><?= $skill['name'] ?></div>
                        <div class="skills_count_box">
                            <div class="skills_count"><?= $skill['count'] ?></div>
                            <div class="skills_up <?php if ($arSkills['skill_up']) echo 'skills_up_vis' ?>">+</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="attack_defence_desc_block">
                <?php foreach ($hero->getHeroSection('battle_stats') as $elem): ?>
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
            <?php foreach ($hero->getHeroSection('additional_skills') as $prop): ?>
                <div class="prop_position" data-type="<?= $prop['index'] ?>">
                    <div class="prop_name"><?= $prop['name'] ?></div>
                    <div class="prop_count_box">
                        <div class="prop_count"><?= $prop['count'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="craft_block">
            <?php foreach ($hero->getHeroSection('craft_stats') as $prop): ?>
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

            <? $rucksack = new Rucksack();
            $arRucksack = $rucksack->getItems();
            //            print_debug($rucksack);
            ?>
            <div class="rucksack_items">
                <?php foreach ($arRucksack as $item): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_item_img <? if ($item['type'] === 'equip') echo 'click_equip'; ?>"
                             src="<?= $item['img'] ?>"
                             alt="" title="<?= $item['name'] ?>"
                             data-index="<?= $item['index'] ?>"
                            <?php if ($item['class']): ?>
                                data-class="<?= $item['class'] ?>"
                            <?php endif; ?>
                        >
                        <div class="rucksack_item_count"><?= $item['count'] ?></div>
                    </div>
                <?php endforeach; ?>

                <?php for ($i = 0; $i < $rucksack->bagEmpty; $i++): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_bag_empty" src="/img/resources/bag.png" alt="">
                    </div>
                <?php endfor; ?>
                <div class="rucksack_item">
                    <img class="rucksack_bag_empty" src="/img/resources/bag_plus.png" alt="">
                </div>
                <?php for ($i = 0; $i < $rucksack->bagLock; $i++): ?>
                    <div class="rucksack_item">
                        <img class="rucksack_bag_empty" src="/img/resources/bag_lock.png" alt="">
                    </div>
                <?php endfor; ?>

            </div>


        </div>


    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Home
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Profile
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Contact
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.click_equip').on('click', function () {
            data = {
                'operation': 'put_on',
                'class': $(this).data('class'),
                'item': $(this).data('index')
            }
            // console.log(data)

            ajaxEquip(data)

        })

        $('.equipment_item_img').on('click', function () {

            data = {
                'operation': 'remove',
                'class': $(this).data('class'),
            }

            ajaxEquip(data)

        })
    })
    function ajaxEquip(data) {
        $.ajax({
            url: "/ajax/equipment/",
            // dataType: "json", // Для использования JSON формата получаемых данных
            method: "POST", // Что бы воспользоваться POST методом, меняем данную строку на POST
            data,
            success: function (data) {
                location.reload()

                console.log(data); // Возвращаемые данные выводим в консоль
            }
        });
    }
</script>