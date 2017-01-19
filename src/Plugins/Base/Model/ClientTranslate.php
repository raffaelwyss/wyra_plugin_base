<?php

namespace Wyra\Plugins\Base\Model;


use Wyra\Kernel\MVC\Model;

class ClientTranslate extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_client_translate");
        $this->getDBTable()->trans = false;

        // Client-Id
        $this->getDBTable()->addColumn('nclientid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Client"
            )
        ]);

        // Language
        $this->getDBTable()->addColumn('clanguage', [
            'size'          => "10",
            'null'          => false,
            'primarykey'    => true
        ]);

        // Client
        $this->getDBTable()->addColumn('cclient', [
            'size'          => "100",
            'null'          => false
        ]);

    }

}