<link rel="stylesheet" href="style.min.css">
<?php
use classes\Region;

require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

parse_str($_SERVER['QUERY_STRING'], $arrQuery);
$reg = new Region($arrQuery['reg']);

?>
<div class="container">
    <div class="location_container">
        <?php foreach ($reg->getLocation() as $loc):?>
            <?=$reg->plantLocation($loc)?>
        <?php endforeach;?>
    </div>
</div>
