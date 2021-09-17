<?php

declare(strict_types=1);

namespace Tournament;

/**
 * Class Viking.
 */
class Viking extends Action
{

    public $type;
    public $enemy;
    public $params;
    public $equip;

    public function __construct($type = false)
    {
        $this->params = array('hitPoints' => 120, 'damage' => 6, 'weapon' => 'axe');

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
        switch ($item){
            case 'buckler':
                $this->equip[$item] = [
                    'name' => 'buckler',
                    'condition' => 3
                ];
                break;
        }
    }
}