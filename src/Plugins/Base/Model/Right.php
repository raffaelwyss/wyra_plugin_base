<?php

namespace Wyra\Plugins\Base\Model;


use Wyra\Kernel\Kernel;
use Wyra\Kernel\MVC\Model;

class Right extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_right");
        $this->getDBTable()->trans = true;

        // Right-ID
        $this->getDBTable()->addColumn('nrightid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'autoincrement' => true,
            'primarykey'    => true
        ]);

        // Right Code
        $this->getDBTable()->addColumn('crightcode', [
            'size'          => "50",
            'null'          => false,
            'unique'        => true
        ]);

    }

}