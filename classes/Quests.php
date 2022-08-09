<?php

namespace classes;

class Quests
{
    use BaseMethods;

    protected $quests = [];

    protected $npcPath = '/files/npc.json';
    protected $questsArrPath = '/files/quests_arr.json';
    protected $questListPath = '/files/quest_list.json';

    protected $npcQuests = [];
    protected $questsArr = [];
    protected $questsList = [];

    protected $questStatus = [
        'active' => [
            'name' => 'Активные',
            'items' => []
        ],
        'new' => [
            'name' => 'Доступные',
            'items' => []
        ],
        'complete' => [
            'name' => 'Выполненные',
            'items' => []
        ],
        'coming' => [
            'name' => 'Недоступные',
            'items' => []
        ]
    ];

    protected $npc_id = '';


    public function __construct($npc_id)
    {
        $this->npc_id = $npc_id;

        $this->npcQuests = $this->loadFile($this->npcPath)[$npc_id]['quests'];

        $this->questsArr = $this->loadFile($this->questsArrPath);

        $this->questsList = $this->loadFile($this->questListPath);

        $this->loadQuestsInfo();
    }

    protected function loadQuestsInfo()
    {

        foreach ($this->questsArr as $id => $item) {
            if (in_array($id, $this->npcQuests)) {

                if ($item['conditions'] === 'none') {

                    $this->questStatus['new']['items'][] = ['name' => $item['name'], 'id' => $id, 'npc' => $this->npc_id];

                }

            }
        }
    }

    public function getQuestStatus()
    {
        return $this->questStatus;
    }

}
