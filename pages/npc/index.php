<link rel="stylesheet" href="style.min.css">
<?php

use classes\Npc;
use classes\Quests;

require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>

<?php
$npc = new Npc($_REQUEST['id']);
$npcInfo = $npc->getInfo();
//print_debug($npc);
$questRequest = new Quests($_REQUEST['id']);
$quests = $questRequest->getQuestStatus();
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

            <ul class="nav nav-tabs" id="questTab" role="tablist">
                <?$num = 0;?>
                <?php foreach ($quests as $status => $quest): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_quest <?= $num++ === 0 ? 'active' : '' ?>"
                                id="home-tab" data-bs-toggle="tab" data-bs-target="#<?= $status ?>"
                                type="button"
                                role="tab" aria-controls="<?= $status ?>"
                                aria-selected="true"><?= $quest['name'] ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="tab-content" id="questTabContent">
                <?$num = 0?>
                <?php foreach ($quests as $status => $quest): ?>
                    <div class="tab-pane fade <?= $num++ === 0 ? 'show active' : '' ?>" id="<?= $status ?>"
                         role="tabpanel" aria-labelledby="<?= $status ?>-tab">
                        <h2><?= $quest['name'] ?></h2>
                        <?php foreach ($quest['items'] as $item):?>
                        <a href="/pages/quest/?npc=<?=$item['npc']?>&quest=<?=$item['id']?>"><?=$item['name']?></a>
                        <?php endforeach;?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>