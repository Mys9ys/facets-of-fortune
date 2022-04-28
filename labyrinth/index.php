<link rel="stylesheet" href="/labyrinth/style.min.css">
<?require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'?>
<?require_once $_SERVER['DOCUMENT_ROOT'] . '/labyrinth/lab_config.php'?>
<div class="labyrinth_container">
    <h1>labyrinth</h1>

    <div class="lab_container">
        <?php foreach ($arLab as $keyR=>$row):?>
        <div class="lab_row">
            <?php foreach ($row as $keyC=>$col):?>
                <div class="lab_cell <?if($col['wall']) echo implode(' ', $col['wall'])?>" data-id="<?=$keyR?>_<?=$keyC?>"></div>
            <?php endforeach;?>
        </div>
        <?php endforeach;?>
    </div>
</div>