<?php

namespace Wyra\Plugin\Base\Model;


use Wyra\Kernel\MVC\Model;

class UserClientRole extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_userclientrole");
        $this->getDBTable()->trans = false;

        // Clientrole-Id
        $this->getDBTable()->addColumn('nuserclientroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true
        ]);

        // Client-Id
        $this->getDBTable()->addColumn('nclientid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Client"
            )
        ]);

        // Role-Id
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