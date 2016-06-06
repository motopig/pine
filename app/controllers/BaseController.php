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
        $this->ci = $Container;
    }


}