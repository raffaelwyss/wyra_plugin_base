<?php


namespace Wyra\Plugins\Base\Controller;

use Wyra\Kernel\Exception\UserException;
use Wyra\Kernel\Kernel;
use Wyra\Kernel\MVC\Controller;
use Wyra\Plugins\Base\Model\User;

class Login extends Controller
{

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->addURL('action', '/login/login');
        $this->addArgument('template', 'login.tpl');
    }

    protected function validateShowHome()
    {
        return true;
    }

    public function showHome()
    {
    }

    public function route()
    {
        switch($this->arguments['Action']) {
            case 'login':
                $this->validateShowHome();
                $this->doLogin();
                break;
            case 'logout':
                $this->validateShowHome();
                $this->doLogout();
                break;
            default:
                parent::route();
                exit;
                break;
        }
        $this->display();
    }

    private function doLogin()
    {
        // Angeforderte Daten von der Datenbank lesen
        $post = Kernel::$post->getAll();
        $data = [];
        $data['username'] = Kernel::$post->get('mail');
        $_user = new User();
        $login = $_user->getOneWhere("cusername = :username", $data);
        $password = null;
        if ($login) {
            $password = Kernel::$crypt->decrypt($login['cpassword']);
        }


        // Kontrolle ob die beiden Passwörter effektiv übereinstimmen
        if ($password !== null and $password === $post['password']) {
            $this->loadUserData();
            $data = [];
            $data['notify'] = Kernel::$language->get('Base.LOGINERFOLGREICH');
            $data['goto'] = '/';
            $this->setData($data);
        } else {
            $message = Kernel::$language->get('Base.LOGINFEHLGESCHLAGEN');
            $this->setData(Kernel::$notify->getDanger($message));
        }
    }

    private function doLogout()
    {
        $this->unloadUserData();
        header('Location: /');

        /*
        $data = [];
        $data['notify'] = Kernel::$language->get('Base.LOGOUTERFOLGREICH');
        $data['goto'] = '/';
        $this->setData($data);
        */
    }

    private function loadUserData()
    {
        $wyra = array();
        $wyra['loggedin'] = true;
        Kernel::$session->set('wyra', $wyra);
    }

    private function unloadUserData()
    {
        Kernel::$session->setAll();
    }

}