<?php
use classes\Equipment;
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';

if($_REQUEST['operation'] === 'put_on'){

    $equip = new Equipment();
    $res = $equip->setEquipItem('equipment', $_REQUEST['class'], $_REQUEST['item']);

}

if($_REQUEST['operation'] === 'remove'){

    $equip = new Equipment();
    $res = $equip->removeItem('equipment', $_REQUEST['class']);

}