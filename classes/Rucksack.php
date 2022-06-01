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

    public function getItems()
    {

        $info = file_get_contents($this->heroConfigUrl);

        $arr = json_decode($info, true);

        $equipments = $this->getEquipments($arr['Equipments']);

        if($equipments) $this->countEquipments = count($equipments);

        $resources = $this->getResources($arr['Resources']);

        if($resources) $this->countResources = count($resources);

        $this->bagEmpty = $this->bagCount - $this->countEquipments - $this->countResources;

        if ($this->bagCount % 10 === 0) {
            $this->bagLock = 10;
        } else {
            $this->bagLock = 10 + 10 - $this->bagCount % 10;
        }

        return array_merge($equipments, $resources);
    }

    protected function getResources($arItems)
    {
        $info = file_get_contents($this->resourcesUrl);

        $arr = json_decode($info, true);

        $res = [];

        foreach ($arItems as $item) {

            if ($arr[$item['index']]) {

                $arr[$item['index']]['count'] = $item['count'];
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
                $res[] = $arr[$item['index']];

            }
        }

        return $res;

    }


}