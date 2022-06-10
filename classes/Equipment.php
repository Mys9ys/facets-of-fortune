<?php

namespace classes;

class Equipment
{
    use BaseMethods;

    protected $equipmentTemplate = [
        'equipment' => [
            'sword',
            'shield',
            'armor',
            'pants',
            'helmet',
            'gloves',
            'belt',
            'boots',
        ],
        'jewelry' => [
            'ring' => [
                [],[],[],[],
            ],
            'necklace' => [
                [],
            ],
            'bracelet' => [
                [],[],
            ]
        ]
    ];

    protected $equipmentSet = [];
    protected $equipImgDir = '/img/equip_temp/';
    protected $equipFile = 'files/equipment.json';

    protected $emptyJewelryImg = [
        'ring',
        'necklace',
        'bracelet',
    ];

    public function __construct(){
        $this->loadEquipment();
    }

    public function getEquipment(){
        return $this->equipmentSet;
    }

    protected function loadEquipment(){
        $heroEquip = $this->loadFile($this->equipFile);
        foreach ($this->equipmentTemplate['equipment'] as $equip){
            if(!$heroEquip[$equip]){
                $this->equipmentSet['equipment'][$equip]['img'] = $this->equipImgDir.$equip. '.png';
                $this->equipmentSet['equipment'][$equip]['title'] = 'Не надето';
            }
        }
    }

    public function setEquipItem($section, $class, $item){

        $this->equipmentSet[$section][$class]['img'] = 'equip/' . $class . '/' .$item . '.png';

        $fp = fopen('equipment_test.json','w');
        fwrite($fp, json_encode($this->equipmentSet));
        fclose($fp);
        return 'tut';
//        $this->saveFile($this->equipFile, $heroEquip);
    }
}