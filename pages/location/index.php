<link rel="stylesheet" href="style.min.css">
<?php use classes\Location;
require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>

<?php
parse_str($_SERVER['QUERY_STRING'], $arrQuery);
$loc = new Location($arrQuery['loc']);
$locInfo = $loc->getLocInfo();
$arNpc = $loc->getArNpc()
?>


<div class="container">
    <div class="location_container">
        <div class="location_info">
            <div class="location_name"><?=$locInfo['name']?></div>
            <div class="location_img">
                <img src="<?= $locInfo['img']?>" alt="">
            </div>
        </div>
        <div class="location_actions">
            <?php foreach ($arNpc as $key=>$npc):?>
            <?php endforeach;?>
        </div>
    </div>
</div>