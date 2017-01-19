<?php

namespace Wyra\Plugins\Base\Model;

use Wyra\Kernel\MVC\Model;

class RightTranslate extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_right_translate");
        $this->getDBTable()->trans = false;

        // Right-Id
        $this->getDBTable()->addColumn('nrightid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'primarykey'    => true,
            'foreignkey'    => array(
                'plugin'    => "Base",
                'model'     => "Right"
            )
        ]);

        // Language
        $this->getDBTable()->addColumn('clanguage', [
            'size'          => "10",
            'null'          => false,
            'primarykey'    => true
        ]);

        // Right
        $this->getDBTable()->addColumn('cright', [
            'size'          => "100",
            'null'          => false
        ]);

    }

}