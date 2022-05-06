<?php
$arLab = [
    range(0, 2),
    range(0, 2),
    range(0, 2),
];
$arWalls = [
    '0_0' => ['bottom'], '0_1' =>['bottom'],
    '1_0' => ['top'], '1_1' => ['top', 'right', 'bottom'], '1_2' => ['left'],
    '2_1' => ['top']
];

$arLoots = [
    '2_0' => ['b']
];

$arObjects = [
  '0_0' => 'exit'
];