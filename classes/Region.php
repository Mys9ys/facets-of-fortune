<?php

namespace classes;

class Region
{
    use BaseMethods;

    protected $filePath = '/files/region.json';
    protected $arrLocation = [];

    public function __construct($id){
        $this->loadLocations($id);
    }

    protected function loadLocations($id){
        $this->arrLocation = $this->loadFile($this->filePath)[$id];
    }

    public function getLocation(){
        return $this->arrLocation;
    }

    public function plantLocation($loc)
    {
        return
            "
                 <a class='location_icon' href='/pages/location?loc={$loc['id']}'>
                    <img src='{$loc['img']}' alt='' title='{$loc['name']}'>
                 </a>
            ";

    }
}