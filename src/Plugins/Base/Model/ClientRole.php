<?php

namespace Wyra\Plugins\Base\Model;


use Wyra\Kernel\MVC\Model;

class ClientRole extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_clientrole");
        $this->getDBTable()->trans = false;

        // Userclientrole-Id
        $this->getDBTable()->addColumn('nclientroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true
        ]);

        // User-Id
        $this->getDBTable()->addColumn('nuserid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "User"
            )
        ]);

        // Clientrole-Id
        $this->getDBTable()->addColumn('nroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Role"
            )
        ]);



    }

}