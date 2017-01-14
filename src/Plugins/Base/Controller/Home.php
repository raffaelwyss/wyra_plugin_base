<?php


namespace Wyra\Plugins\Base\Controller;

use Wyra\Kernel\Kernel;
use Wyra\Kernel\MVC\Controller;
use Wyra\Plugin\Base\Model\ModelHolder;

class Home extends Controller
{

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->addArgument('template', 'home.tpl');
    }

    public function getData()
    {
        return array('abc');
    }

    protected function validateShowHome()
    {
        return true;
    }

    public function showHome()
    {

    }

}