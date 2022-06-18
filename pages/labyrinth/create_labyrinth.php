<?php
$row = 10;
$col = 10;
$intensity = 0.4;

createLabyrinth($row, $col, $intensity);

function createLabyrinth($row, $col, $intensity)
{

    $arWall = [];

    $sumWall = 0;

    $wall = ($row - 1) * ($row - 2) + ($col - 1) * ($col - 2);
    var_dump($wall);
    $wall = intval($wall * $intensity);
    var_dump($wall);

    for ($i = 1; $i < $row - 1; $i++) {
        for ($j = 1; $j < $col - 1; $j++) {
            $countWall = randCountWall();
            if ($countWall) {
                var_dump($countWall);
                $arWall[$i][$j] = selectWallSide($i, $j, $countWall);
                $sumWall += $countWall;
            }
        }
    }

//    var_dump($sumWall);
    echo '<pre>';
//    var_dump($arWall);/
    echo '</pre>';

}

function randCountWall()
{

    $rand = rand(0, 99);

    if (in_array($rand, range(0, 34))) {
        return 0;
    }

    if (in_array($rand, range(35, 69))) {
        return 1;
    }

    if (in_array($rand, range(70, 92))) {
        return 2;
    }

    if (in_array($rand, range(92, 99))) {
        return 3;
    }
}

function selectWallSide($row, $col, $count)
{
    $arWall = ['up', 'right', 'bottom', 'left'];
    shuffle($arWall);
    $arResult = [];
    for ($i = 0; $i < $count; $i++) {
        $arResult[] = $arWall[$i];
    }
    return $arResult;
}