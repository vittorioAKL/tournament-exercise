<?php

declare(strict_types=1);

namespace Tournament;

/**
 * Class Highlander.
 */
class Highlander extends Action
{

    public $type;
    public $enemy;
    public $params;
    public $equip;

    public function __construct($type = false)
    {
        $this->params = array('hitPoints' => 150, 'damage' => 12, 'weapon' => 'great_sword');
        $this->type = $type;
    }


    public function engage($enemy)
    {
        $this->enemy = $enemy;
        $this->fight($this, $this->enemy);
    }

    public function hitPoints()
    {
        return $this->params['hitPoints'];
    }

    public function equip($item = false)
    {

    }
}