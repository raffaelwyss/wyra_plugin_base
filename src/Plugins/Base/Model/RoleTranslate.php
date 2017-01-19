<?php

namespace Wyra\Plugins\Base\Model;


use Wyra\Kernel\MVC\Model;

class RoleTranslate extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_role_translate");
        $this->getDBTable()->trans = false;

        // Role-Id
        $this->getDBTable()->addColumn('nroleid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Role"
            )
        ]);

        // Language
        $this->getDBTable()->addColumn('clanguage', [
            'size'          => "10",
            'null'          => false,
            'primarykey'    => true
        ]);

        // Role
        $this->getDBTable()->addColumn('crole', [
            'size'          => "100",
            'null'          => false
        ]);

    }

}