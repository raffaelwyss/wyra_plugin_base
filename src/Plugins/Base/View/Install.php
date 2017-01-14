<?php

namespace Wyra\Plugins\Base\View;

use Wyra\Kernel\Kernel;
use Wyra\Kernel\MVC\View;

/**
 * View from Install-Class WyRa
 *
 * Copyright (c) 2017, Raffael Wyss <raffael.wyss@gmail.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Raffael Wyss nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @autor       Raffael Wyss <raffael.wyss@gmail.com>
 * @copyright   2017 Raffael Wyss. All rights reserved.
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD License
 */
class Install extends View
{
    public function getFormStructure()
    {
        $data = parent::getFormStructure();
        $data['elements']['datenbank'] = $this->getFormStructureDatenbank();
        $data['elements']['einstellung'] = $this->getFormStructureEinstellung();
        return $data;
    }


    private function getFormStructureDatenbank()
    {
        $data = array();

        // Host
        $data[] = array(
            'name' => 'host',
            'type' => 'text',
            'element' => 'input',
            'label' => 'DATENBANKHOST',
            'required' => true,
            'value' => 'localhost'
        );

        // Database
        $data[] = array(
            'name' => 'database',
            'type' => 'text',
            'element' => 'input',
            'label' => 'DATENBANKNAME',
            'required' => true,
            'value'  => 'Wyra'
        );

        // DB-User
        $data[] = array(
            'name' => 'dbuser',
            'type' => 'text',
            'element' => 'input',
            'label' => 'DATENBANKUSER',
            'required' => true,
            'value'  => 'wyra'
        );

        // DB-Password
        $data[] = array(
            'name' => 'dbpassword',
            'type' => 'password',
            'element' => 'input',
            'label' => 'DATENBANKPASSWORT',
            'required' => true,
            'value'  => 'wyra'
        );

        // DB-Prefix
        $data[] = array(
            'name' => 'tableprefix',
            'type' => 'text',
            'element' => 'input',
            'label' => 'TABELLENPREFIX',
            'required' => true,
            'value'  => 'wyra_'
        );

        return $data;

    }

    private function getFormStructureEinstellung()
    {
        $data = array();

        // Pagename
        $data[] = array(
            'name' => 'pagename',
            'type' => 'text',
            'element' => 'input',
            'label' => 'SEITENNAME',
            'required' => true,
            'value' => 'WyRa App'
        );

        // Mail
        $data[] = array(
            'name' => 'adminmail',
            'type' => 'text',
            'element' => 'input',
            'label' => 'ADMINMAIL',
            'required' => true,
            'value' => 'wyra@wyssinet.ch'
        );

        // Administrator
        $data[] = array(
            'name' => 'adminname',
            'type' => 'text',
            'element' => 'input',
            'label' => 'ADMINNAME',
            'required' => true,
            'value' => 'Administrator'
        );

        // Admin-Password
        $data[] = array(
            'name' => 'adminpassword',
            'type' => 'password',
            'element' => 'input',
            'label' => 'ADMINPASSWORT',
            'required' => true,
            'value' => 'Password'
        );

        return $data;
    }
}