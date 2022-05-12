<?php

class CreateLabyrinth
{
    private $arWall = [];
    private $col = 10;
    private $row = 10;
    private $sumWall = 0;

    public function createLabyrinth()
    {
        for ($i = 1; $i < $this->row - 1; $i++) {
            for ($j = 1; $j < $this->col - 1; $j++) {
                $countWall = $this->randCountWall();
                if ($countWall) {
                    $this->selectWallSide($i, $j, $countWall);
                    $this->sumWall += $countWall;
                }
            }
        }

        return $this->arWall;
    }

    private function randCountWall()
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

    private function selectWallSide($row, $col, $count)
    {
        $arWall = ['up', 'right', 'bottom', 'left'];
        shuffle($arWall);
        $arResult = [];
        for ($i = 0; $i < $count; $i++) {
            $arResult[] = $arWall[$i];
        }
        $this->arWall[$row][$col] = $arResult;
    }

}