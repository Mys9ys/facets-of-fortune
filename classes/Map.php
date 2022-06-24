<?php

namespace classes;

class Map
{
    use BaseMethods;

    protected $filePath = '/files/map.json';
    protected $arrRegion = [];

    public function __construct()
    {
        $this->loadRegions();
    }

    protected function loadRegions()
    {
        $this->arrRegion = $this->loadFile($this->filePath);
    }

    public function plantRegion($x, $y)
    {
        if ($this->arrRegion[$x . '_' . $y]){
            $region = $this->arrRegion[$x . '_' . $y];
            return
                "
                     <a class='city_icon' href='/pages/region?reg={$region['id']}'>
                        <img src='{$region['img']}' alt='' title='{$region['name']}'>
                     </a>
                ";
        }

    }
}
