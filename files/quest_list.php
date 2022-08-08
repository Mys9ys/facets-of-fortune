<?php
$arr = [

];

$fp = fopen('quest_list.json', 'w');
fwrite($fp, json_encode($arr));
fclose($fp);