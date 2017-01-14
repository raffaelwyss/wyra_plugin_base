<?php

namespace Wyra\Plugin\Base\Model;


use Wyra\Kernel\MVC\Model;

class Role extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_role");
        $this->getDBTable()->trans = true;

        // Role-ID
        $this->getDBTable()->addColumn('nroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'autoincrement' => true,
            'primarykey'    => true
        ]);

        // Role Code
        $this->getDBTable()->addColumn('crolecode', [
            'size'          => "20",
            'null'          => false,
            'unique'        => true
        ]);

    }

}