<?php

namespace Wyra\Plugin\Base\Model;


use Wyra\Kernel\MVC\Model;

class Client extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_client");
        $this->getDBTable()->trans = true;

        // Client-ID
        $this->getDBTable()->addColumn('nclientid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'autoincrement' => true,
            'primarykey'    => true
        ]);

        // Client Code
        $this->getDBTable()->addColumn('cclientcode', [
            'size'          => "20",
            'null'          => false,
            'unique'        => true
        ]);

    }

}