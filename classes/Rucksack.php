<?php

namespace classes;

class Rucksack
{
    protected $heroConfigUrl = 'hero/hero.json';
    protected $equipmentsUrl = 'files/equipments.json';
    protected $resourcesUrl = 'files/resources.json';

    public $bagCount = 32;
    public $bagEmpty;
    public $bagLock;
    public $countEquipments;
    public $countResources;

    protected $equipments = [];
    protected $resources = [];
    protected $items = [];


    public function __construct()
    {
        $info = file_get_contents($this->heroConfigUrl);

        $arr = json_decode($info, true);

        $this->equipments = $this->getEquipments($arr['Equipments']);
        if($this->equipments) $this->countEquipments = count($this->equipments);

        $this->resources = $this->getResources($arr['Resources']);

        if($this->resources) $this->countResources = count($this->resources);

        $this->bagEmpty = $this->bagCount - $this->countEquipments - $this->countResources;

        if ($this->bagCount % 10 === 0) {
            $this->bagLock = 9;
        } else {
            $this->bagLock = 9 + 10 - $this->bagCount % 10;
        }

        $this->items = array_merge($this->equipments, $this->resources);
    }

    public function getItems()
    {
        return $this->items;
    }

    protected function getResources($arItems)
    {
        $info = file_get_contents($this->resourcesUrl);

        $arr = json_decode($info, true);

        $res = [];

        foreach ($arItems as $item) {

            if ($arr[$item['index']]) {

                $arr[$item['index']]['count'] = $item['count'];
                $arr[$item['index']]['index'] = $item['index'];
                $res[] = $arr[$item['index']];

            }
        }

        return $res;
    }

    protected function getEquipments($arItems)
    {

        $info = file_get_contents($this->equipmentsUrl);

        $arr = json_decode($info, true);

        $res = [];

        foreach ($arItems as $item) {

            if ($arr[$item['index']]) {

                $arr[$item['index']]['count'] = $item['count'];
                $arr[$item['index']]['index'] = $item['index'];
                $res[] = $arr[$item['index']];

            }
        }

        return $res;

    }


}