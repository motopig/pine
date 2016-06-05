<?php


namespace App\Controllers;



class BaseController
{

    /**
     * Container Interface
     *
     * @var object
     */
    public $ci;

    public function __construct( $Container )
    {
        $Container['view'] =  function ($c) {
            $view = new \Slim\Views\Twig(VIEW_BASE_PATH, ['cache' => BASE_PATH .'/cache']);
            $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
            $view->addExtension(new \Slim\Views\TwigExtension($c['router'], $basePath));

            return $view;
        };

        $this->ci = $Container;
    }


}