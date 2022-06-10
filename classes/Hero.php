<?php

namespace classes;

class Hero
{
    use BaseMethods;

    protected $heroInfo = [];

    protected $heroInfoSection = [
        'main_info',
        'money',
        'skills',
        'battle_stats',
        'additional_skills',
        'craft_stats'
    ];

    public function __construct()
    {
        foreach ($this->heroInfoSection as $section){
            $this->loadSectionInfo($section);
        }
    }

    protected function loadSectionInfo($section){
        $this->heroInfo[$section] = $this->loadFile('/files/' . $section . '.json');
    }

    public function getHeroSection($section){
        return $this->heroInfo[$section];
    }

}