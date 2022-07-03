<?php

namespace classes;

class Location
{
    use BaseMethods;

    protected $locInfo = [];
    protected $arNpc = [];

    protected $fileLoc = '/files/location.json';
    protected $fileNpc = '/files/npc.json';

    public function __construct($id)
    {
        $this->loadInfo($id);
        $this->loadNPC();
    }

    protected function loadInfo($id)
    {
        $this->locInfo = $this->loadFile($this->fileLoc)[$id];
    }

    protected function loadNPC()
    {
        $arNpcIds = $this->locInfo['npc'];
        if ($arNpcIds) {

            foreach ($arNpcIds as $id) {
                $this->arNpc[] = $this->loadFile($this->fileNpc)[$id];
            }

        }
    }

    /**
     * @return array
     */
    public function getArNpc(): array
    {
        return $this->arNpc;
    }

    /**
     * @return array
     */
    public function getLocInfo(): array
    {
        return $this->locInfo;
    }


}