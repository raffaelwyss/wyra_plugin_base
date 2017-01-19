<?php

namespace Wyra\Plugins\Base\Model;

use Wyra\Kernel\MVC\Model;

class ClientRoleTranslate extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_clientrole_translate");
        $this->getDBTable()->trans = false;

        // Clientrole-Id
        $this->getDBTable()->addColumn('nclientroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "ClientRole"
            )
        ]);

        // Language
        $this->getDBTable()->addColumn('clanguage', [
            'size'          => "10",
            'null'          => false,
            'primarykey'    => true
        ]);

        // Client
        $this->getDBTable()->addColumn('cclientrole', [
            'size'          => "100",
            'null'          => false
        ]);

    }

}