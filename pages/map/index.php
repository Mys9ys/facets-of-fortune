<link rel="stylesheet" href="style.min.css">
<?php
use classes\Map;
require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
$map = new Map();
?>

<div class="container">
    <div class="map_container">

        <?php for ($y = 0; $y < 8; $y++): ?>
           <div class="map_row">
               <?php for ($x = 0; $x < 25; $x++): ?>
                   <div class="map_cell" data-x="<?=$x?>" data-y="<?=$y?>">
                       <?=$map->plantRegion($x,$y)?>
                   </div>
               <?php endfor; ?>
           </div>
        <?php endfor; ?>
    </div>
</div>

