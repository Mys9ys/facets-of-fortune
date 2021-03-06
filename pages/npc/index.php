<link rel="stylesheet" href="style.min.css">
<?php

use classes\Npc;

require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>

<?php
$npc = new Npc($_REQUEST['id']);
$npcInfo = $npc->getInfo();
//print_debug($npc);
?>


<div class="container">
    <div class="npc_container">
        <div class="npc_info">
            <div class="npc_name"><?= $npcInfo['name']; ?></div>
            <div class="npc_img">
                <img src="<?= $npcInfo['img']; ?>" alt="">
            </div>
        </div>
        <div class="npc_quests">
            <? $quests = [
                [
                    'status' => 'active',
                    'name' => 'Активные'
                ],
                [
                    'status' => 'new',
                    'name' => 'Доступные'
                ],
                [
                    'status' => 'complete',
                    'name' => 'Выполненные'
                ],
                [
                    'status' => 'coming',
                    'name' => 'Недоступные'
                ]
            ]; ?>
            <ul class="nav nav-tabs" id="questTab" role="tablist">
                <?php foreach ($quests as $key => $quest): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_quest <?= $key === 0 ? 'active' : '' ?>"
                                id="home-tab" data-bs-toggle="tab" data-bs-target="#<?= $quest['status'] ?>"
                                type="button"
                                role="tab" aria-controls="<?= $quest['status'] ?>"
                                aria-selected="true"><?= $quest['name'] ?>
                        </button>
                    </li>
                <?php endforeach; ?>

<!--                <li class="nav-item" role="presentation">-->
<!--                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"-->
<!--                            role="tab" aria-controls="home" aria-selected="true">Home-->
<!--                    </button>-->
<!--                </li>-->
                <!--                <li class="nav-item" role="presentation">-->
                <!--                    <button class="nav-link nav_quest" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"-->
                <!--                            role="tab" aria-controls="profile" aria-selected="false">Доступные-->
                <!--                    </button>-->
                <!--                </li>-->
                <!--                <li class="nav-item" role="presentation">-->
                <!--                    <button class="nav-link nav_quest" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"-->
                <!--                            role="tab" aria-controls="contact" aria-selected="false">Выполненные-->
                <!--                    </button>-->
                <!--                </li>-->
                <!--                <li class="nav-item" role="presentation">-->
                <!--                    <button class="nav-link nav_quest" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"-->
                <!--                            role="tab" aria-controls="contact" aria-selected="false">Недоступные-->
                <!--                    </button>-->
                <!--                </li>-->
            </ul>
            <div class="tab-content" id="questTabContent">
                <?php foreach ($quests as $key => $quest): ?>
                    <div class="tab-pane fade <?= $key === 0 ? 'show active' : '' ?>" id="<?= $quest['status'] ?>"
                         role="tabpanel" aria-labelledby="<?= $quest['status'] ?>-tab">
                        <h2><?= $quest['name'] ?></h2>
                    </div>
                <?php endforeach; ?>
                <!--                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                <!--                    Активные-->
                <!--                </div>-->
                <!--                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                <!--                    Доступные-->
                <!--                </div>-->
                <!--                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">-->
                <!--                    Выполненные-->
                <!--                </div>-->
                <!--                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">-->
                <!--                    Недоступные-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>