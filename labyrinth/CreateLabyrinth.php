<?php

class CreateLabyrinth
{
    private $arWall = [];
    private $col = 45;
    private $row = 25;
    private $sumWall = 0;

    private $zeroWall = 20;
    private $oneWall = 65;
    private $twoWall = 93;

    public function __construct()
    {

    }

    public function create()
    {
        for ($i = 1; $i < $this->row - 1; $i++) {
            for ($j = 1; $j < $this->col - 1; $j++) {
                $countWall = $this->randCountWall();
                if($this->arWall[$i][$j]) {
                    $countWall -= count($this->arWall[$i][$j]);
//                    var_dump($countWall);
                }
                if ($countWall>0) {
                    $this->selectWallSide($i, $j, $countWall);
                    $this->sumWall += $countWall;
                }
            }
        }

        var_dump($this->sumWall);
        return $this->arWall;
    }

    private function randCountWall()
    {
        $rand = rand(0, 99);

        if (in_array($rand, range(0, $this->zeroWall-1))) {
            return 0;
        }

        if (in_array($rand, range($this->zeroWall, $this->oneWall-1))) {
            return 1;
        }

        if (in_array($rand, range($this->oneWall, $this->twoWall-1))) {
            return 2;
        }

        if (in_array($rand, range($this->twoWall, 99))) {
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
            $this->doubleWallSet($row, $col, $arWall[$i]);
        }
        $this->arWall[$row][$col] = $this->arWall[$row][$col] ? array_merge($this->arWall[$row][$col], $arResult) : $arResult;
    }

    private function doubleWallSet($row, $col, $side)
    {
        $addSide = '';
        switch ($side) {
            case 'up':
                $row -= 1;
                $addSide = 'bottom';
                break;
            case 'right':
                $col += 1;
                $addSide = 'left';
                break;
            case 'bottom':
                $row += 1;
                $addSide = 'up';
                break;
            case 'left':
                $col -= 1;
                $addSide = 'right';
                break;

        }

        $this->arWall[$row][$col][] = $this->arWall[$row][$col] ? array_push($this->arWall[$row][$col], $addSide) : $addSide;

//        $this->arWall[$row][$col][] = $addSide;
    }

    public function getSize(){
        return ['row'=>$this->row, 'col'=>$this->col];
    }

}