<?php

namespace classes;

class Npc
{
    use BaseMethods;

    protected $npcInfo;
    protected $npcQuests;

    protected $fileNpc = '/files/npc.json';
    protected $fileQuests = '/files/quests.json';

    public function __construct($id)
    {
        $this->loadInfo($id);
        $this->loadQuests();
    }

    protected function loadInfo($id){
        $this->npcInfo = $this->loadFile($this->fileNpc)[$id];
    }

    protected function loadQuests(){

    }

    public function getInfo(){
        return $this->npcInfo;
    }
}