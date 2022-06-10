<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';
use \classes\Equipment;
?>

<?php
$equip = new Equipment();
var_dump($equip->getEquipment());
$_REQUEST =[
    'operation' => 'put_on',
    'class' => 'sword',
    'item' => 'sword_1'
];
echo json_encode($_REQUEST);
if($_REQUEST['operation'] === 'put_on'){

    echo 'mi tyty1';
    $equip = new Equipment();
    var_dump($equip->getEquipment());
    $res = $equip->setEquipItem('equipment', $_REQUEST['class'], $_REQUEST['item']);

    echo $res;

}