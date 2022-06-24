<?php

namespace classes;

class Location
{
    use BaseMethods;

    protected $locInfo;
    protected $arNpc = [];

    protected $fileLoc = '/files/location.json';
    protected $fileNpc = '/files/npc.json';

    public function __construct($id)
    {
        $this->loadInfo($id);
    }

    protected function loadInfo($id){
        $this->locInfo = $this->loadFile($this->fileLoc)[$id];
        $this->arNpc = $this->loadFile($this->fileNpc)[$id];
    }


}