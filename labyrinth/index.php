<link rel="stylesheet" href="/labyrinth/style.min.css">
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/template/header.php' ?>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/labyrinth/lab_config.php' ?>
<div class="labyrinth_container">
    <h1>labyrinth</h1>

    <div class="lab_container">
        <?php foreach ($arLab as $keyR => $row): ?>
            <div class="lab_row">
                <?php foreach ($row as $keyC => $col): ?>
                    <div id="<?= $keyR ?>_<?= $keyC ?>"
                         class="lab_cell <? if ($col['wall']) echo implode(' ', $col['wall']) ?>">
                        <? if ($col['obj']['exit'] == 'y') echo '<span class="player_place">u</span>' ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        console.log('tyt')

        document.body.onkeydown = function (e) {
            PlayerStep(e.key)
            console.log('e', e.key)
        }
    })

    function PlayerStep(key) {
        selector = $('.lab_container').find('.player_place')
        coord = selector.parent().attr('id').split('_')

        switch (key) {
            case 'ArrowUp':
                PlayerGoUp(selector, coord)
                break;
            case 'ArrowRight':
                PlayerGoRight(selector, coord)
                break;
            case 'ArrowLeft':
                PlayerGoLeft(selector, coord)
                break;
            case 'ArrowDown':
                PlayerGoDown(selector, coord)
                break;
        }
    }

    function PlayerGoUp(selector, coord) {
        if (coord[0] > 0) {
            coord[0] -= 1
            PlayerMoving(selector,coord)
        }
    }

    function PlayerGoRight(selector, coord) {
        if (coord[1] < coord.length) {
            coord[1] = Number(coord[1]) + 1
            PlayerMoving(selector,coord)
        }
    }

    function PlayerGoDown(selector, coord) {
        if (coord[0] < coord.length) {
            coord[0] = Number(coord[0]) + 1
            PlayerMoving(selector,coord)
        }
    }

    function PlayerGoLeft(selector, coord) {
        if (coord[1] > 0) {
            coord[1] -= 1
            PlayerMoving(selector,coord)
        }
    }

    function PlayerMoving(selector,coord) {
        Player = selector.remove()
        $('#' + coord.join('_')).append(Player)
    }
</script>