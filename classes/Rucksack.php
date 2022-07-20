<?php

namespace classes;

class Rucksack
{
    use BaseMethods;

    protected $heroConfigUrl = '/files/hero.json';
    protected $equipmentsUrl = '/files/equipments_template.json';
    protected $resourcesUrl = '/files/resources.json';

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

        $arr = $this->loadFile($this->heroConfigUrl);

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

        $arr = $this->loadFile($this->resourcesUrl);

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

        $arr = $this->loadFile($this->equipmentsUrl);

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