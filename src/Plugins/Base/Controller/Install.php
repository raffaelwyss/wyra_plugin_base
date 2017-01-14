<?php


namespace Wyra\Plugins\Base\Controller;

use Wyra\Kernel\DB\DB;
use Wyra\Kernel\Kernel;
use Wyra\Kernel\MVC\Controller;
use Wyra\Plugin\Base\Model\ModelHolder;

class Install extends Controller
{

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->addURL('action', '/install/install');
        $this->addArgument('template', 'install.tpl');
    }

    protected function showHome()
    {

    }

    protected function doInsert()
    {
        // Connect DB
        $user = Kernel::$post->get('adminname');
        $password = Kernel::$post->get('adminpassword');
        $mail = Kernel::$post->get('adminmail');
        $dbconf = [];
        $dbconf['host'] = Kernel::$post->get('host');
        $dbconf['database'] = Kernel::$post->get('database');
        $dbconf['user'] = Kernel::$post->get('dbuser');
        $dbconf['password'] = Kernel::$post->get('dbpassword');
        $dbconf['prefix'] = Kernel::$post->get('tableprefix');
        Kernel::$config->set('db.prefix', $dbconf['prefix']);
        $db = new DB();
        $db->connect($dbconf);
        Kernel::$db = $db;

        // Create Structure
        $modelHolder = new ModelHolder();
        $modelHolder->createTables();
        $modelHolder->updateIndexes();
        Kernel::$db->updateForeignKeys();

        // Insert Data
        $insertFile = Kernel::$config->get('rootPath').'/src/Plugin/Base/DB/install/insert.sql';
        if (file_exists($insertFile)) {
            $insertSQL = file_get_contents($insertFile);
            $insertSQL = str_replace('{db.prefix}', Kernel::$config->get('db.prefix'), $insertSQL);
            $db->query($insertSQL);
        }

        // Create SuperUser/Admin
        $sql = "INSERT INTO ".Kernel::$config->get('db.prefix')."base_user
                    (cmail, cusername, cpassword, cproperties, dentrydate) VALUES 
                    (:mail, :user, :password, :cproperties, :dentrydate) ";
        $db->query($sql, [
            'mail' => $mail,
            'user' => $user,
            'password' => Kernel::$crypt->crypt($password),
            'cproperties' => '{}',
            'dentrydate' => date('Y-m-d H:i:s')
        ]);

        // Write the DBConfig
        file_put_contents(Kernel::$config->get('wyraPath').'/app/config/installed/db.conf', json_encode($dbconf));

        // Installation abgeschlossen
        file_put_contents(Kernel::$config->get('rootPath')."/.installed", 'installed');

        $data = array();
        $data['goto'] = Kernel::$server->get('baseUrl').'/home';
        $data['notify'] = Kernel::$language->get('INSTALLATIONERFOLGREICH');
        $this->setData($data);

    }

    protected function validateShowHome()
    {
        if ($this->isInstalled()) {
            if (Kernel::$config->get('loggedin')) {
                header('Location: /home');
            } else {
                header("Location: /login");
            }
        }
        return true;
    }

    protected function validateDoInsert()
    {
        if ($this->isInstalled()) {
            parent::validateDoInsert();
        }
    }

    private function isInstalled()
    {
        if (Kernel::$config->get('installed')) {
            return true;
        }
        return false;
    }


}