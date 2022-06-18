<link rel="stylesheet" href="style.min.css">
<? use classes\CreateLabyrinth;

require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/labyrinth/lab_config.php' ?>
<?// require_once($_SERVER['DOCUMENT_ROOT'] . '/pages/labyrinth/create_labyrinth.php');
$lab = new CreateLabyrinth();
$size = $lab->getSize()?>
<div class="labyrinth_container">
    <h1>labyrinth</h1>

<!--    <div class="lab_container">-->
<!--        --><?php //foreach ($arLab as $keyR => $row): ?>
<!--            <div class="lab_row">-->
<!--                --><?php //foreach ($row as $keyC => $col):
//                    $id = $keyR .'_' . $keyC?>
<!--                    <div id="--><?//= $id ?><!--"-->
<!--                         class="lab_cell --><?// if ($arWalls[$id]) echo implode(' ', $arWalls[$id]) ?><!--">-->
<!--                        --><?// if ($arObjects[$id] == 'exit') echo '<span class="player_place">u</span>' ?>
<!--                        --><?// if ($arLoots[$id]) foreach ($arLoots[$id] as $loot) {
//                            echo '<span class="cell_loot">' . $loot . '</span>'; }?>
<!--                    </div>-->
<!--                --><?php //endforeach; ?>
<!--            </div>-->
<!--        --><?php //endforeach; ?>
<!--    </div>-->

    <div class="lab_container" data-row="<?=$size['row']?>" data-col="<?=$size['col']?>">
        <?php for ($i=0;$i<$size['row'];$i++): ?>
            <div class="lab_row">
                <?php for ($j=0;$j<$size['col'];$j++):
                    $id = $i .'_' . $j?>
                    <div id="<?= $id ?>"
                         class="lab_cell <? if ($arWallsNew[$i][$j]) echo implode(' ', $arWallsNew[$i][$j]) ?>">
                        <? if ($arObjects[$id] == 'exit') echo '<span class="player_place">u</span>' ?>
                        <? if ($arLoots[$id]) foreach ($arLoots[$id] as $loot) {
                            echo '<span class="cell_loot">' . $loot . '</span>'; }?>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
</div>

<script>
    $(document).ready(function () {

        document.body.onkeydown = function (e) {
            console.log(e.key)
            PlayerStep(e.key)
        }
    })

    function PlayerStep(key) {
        selector = $('.lab_container').find('.player_place')
        labCol = $('.lab_container').data('row') - 1
        labRow = $('.lab_container').data('col') - 1
        cell = selector.parent().attr('id')
        coord = cell.split('_')

        switch (key) {
            case 'ArrowUp':
                PlayerGoUp(selector, cell, coord)
                break;
            case 'ArrowRight':
                PlayerGoRight(selector, cell, coord, labCol)
                break;
            case 'ArrowLeft':
                PlayerGoLeft(selector, cell, coord)
                break;
            case 'ArrowDown':
                PlayerGoDown(selector, cell, coord, labRow)
                break;
        }
    }

    function PlayerGoUp(selector, cell, coord, labCol, labRow) {
        if (coord[0] > 0 && !$('#'+cell).is('.up')) {
            coord[0] -= 1
            PlayerMoving(selector, coord)
        }
    }

    function PlayerGoRight(selector, cell, coord, labCol) {
        if (coord[1] < labCol && !$('#'+cell).is('.right')) {
            coord[1] = Number(coord[1]) + 1
            PlayerMoving(selector, coord)
        }
    }

    function PlayerGoDown(selector, cell, coord, labRow) {
        // console.log($('#'+cell).is('.bottom'))
        if (coord[0] < labRow && !$('#'+cell).is('.bottom')) {
            coord[0] = Number(coord[0]) + 1
            PlayerMoving(selector, coord)
        }
    }

    function PlayerGoLeft(selector, cell, coord, labCol, labRow) {
        if (coord[1] > 0 && !$('#'+cell).is('.left')) {
            coord[1] -= 1
            PlayerMoving(selector, coord)
        }
    }

    function PlayerMoving(selector, coord) {
        Player = selector.remove()
        $('#' + coord.join('_')).append(Player)
    }
</script>