<?php

namespace Wyra\Plugin\Base\Model;

class ModelHolder extends \Wyra\Kernel\MVC\ModelHolder
{

    /** @var null|Client */
    public $client = null;

    /** @var null|ClientRole  */
    public $clientRole = null;

    /** @var null|ClientRoleTranslate */
    public $clientRoleTranslate = null;

    /** @var null|ClientTranslate */
    public $clientTranslate = null;

    /** @var null|Right */
    public $right = null;

    /** @var null|RightTranslate  */
    public $rightTranslate = null;

    /** @var null|Role */
    public $role = null;

    /** @var null|RoleRight */
    public $roleRight = null;

    /** @var null|RoleTranslate  */
    public $roleTranslate = null;

    /** @var null|User */
    public $user = null;

    /** @var null|UserClientRole */
    public $userClientRole = null;

    protected function init()
    {
        // Models laden
        $this->client = new Client();
        $this->clientRole = new ClientRole();
        $this->clientRoleTranslate = new ClientRoleTranslate();
        $this->right = new Right();
        $this->rightTranslate = new RightTranslate();
        $this->role = new Role();
        $this->roleRight = new RoleRight();
        $this->roleTranslate = new RoleTranslate();
        $this->user = new User();
        $this->userClientRole = new UserClientRole();

        // Models in Model-Arry setzen
        $this->models[] = $this->client;
        $this->models[] = $this->clientRole;
        $this->models[] = $this->clientRoleTranslate;
        $this->models[] = $this->right;
        $this->models[] = $this->rightTranslate;
        $this->models[] = $this->role;
        $this->models[] = $this->roleRight;
        $this->models[] = $this->roleTranslate;
        $this->models[] = $this->user;
        $this->models[] = $this->userClientRole;
    }

}