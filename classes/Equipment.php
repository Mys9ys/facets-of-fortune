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
    protected $equipFile = '/files/equipment.json';

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
            if(!$heroEquip['equipment'][$equip]){
                $this->equipmentSet['equipment'][$equip]['img'] = $this->equipImgDir.$equip. '.png';
                $this->equipmentSet['equipment'][$equip]['title'] = 'Не надето';
            } else {
                $this->equipmentSet['equipment'][$equip]['img'] = $heroEquip['equipment'][$equip]['img'];
                $this->equipmentSet['equipment'][$equip]['title'] = $heroEquip['equipment'][$equip]['title'];
            }
        }
    }

    public function setEquipItem($section, $class, $item){

        $this->equipmentSet[$section][$class]['img'] = '/img/equip/' . $class . '/' .$item . '.png';
        $this->equipmentSet[$section][$class]['title'] = '';

        $this->saveFile($this->equipFile, $this->equipmentSet);
    }

    public function removeItem($section, $class){
        $this->equipmentSet[$section][$class]['img'] = $this->equipImgDir.$class. '.png';
        $this->equipmentSet[$section][$class]['title'] = 'Не надето';

        $this->saveFile($this->equipFile, $this->equipmentSet);
    }
}