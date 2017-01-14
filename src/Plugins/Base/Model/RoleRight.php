<?php

namespace Wyra\Plugin\Base\Model;


use Wyra\Kernel\MVC\Model;

class RoleRight extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_roleright");
        $this->getDBTable()->trans = false;

        // Roleright-Id
        $this->getDBTable()->addColumn('nrolerightid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true
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

        // Rigth-Id
        $this->getDBTable()->addColumn('nrightid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Right"
            )
        ]);

    }

}