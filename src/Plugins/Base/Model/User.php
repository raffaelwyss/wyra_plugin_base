<?php

namespace Wyra\Plugins\Base\Model;


use Wyra\Kernel\MVC\Model;

class User extends Model
{

    protected function loadDBStructure()
    {
        $this->getDBTable()->setName("base_user");
        $this->getDBTable()->trans = false;

        // User-ID
        $this->getDBTable()->addColumn('nuserid', [
            'type'          => "INT",
            'size'          => "11",
            'null'          => false,
            'autoincrement' => true,
            'primarykey'    => true
        ]);

        // Mail
        $this->getDBTable()->addColumn('cmail', [
            'size'          => "100",
            'null'          => false,
            'unique'        => true
        ]);
        $this->getDBTable()->addUnique('cmail', 'cmail');

        // Username
        $this->getDBTable()->addColumn('cusername', [
            'size'          => "100",
            'null'          => false,
            'unique'        => true
        ]);

        // Password
        $this->getDBTable()->addColumn('cpassword', [
            'size'          => "100",
            'null'          => false
        ]);
        $this->getDBTable()->addUnique('cpassword', 'cpassword');

        // Surename
        $this->getDBTable()->addColumn('csurename', [
            'size'          => "50",
            'null'          => false,
            'default'       => '',
            'index'         => true
        ]);

        // Firstname
        $this->getDBTable()->addColumn('cfirstname', [
            'size'          => "50",
            'null'          => false,
            'default'       => '',
            'index'         => true
        ]);

        // Properties
        $this->getDBTable()->addColumn('cproperties', [
            'type'          => 'TEXT',
            'null'          => false
        ]);

    }

}