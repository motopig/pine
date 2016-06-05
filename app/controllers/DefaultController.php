<?php

/**
 *
 * DefaultController
 *
 */

namespace App\Controllers;


class DefaultController extends BaseController
{

    public function land()
    {
        $data = ['name' => 'land'];
        return $this->ci->view->render($this->ci->response, 'land.html', $data);
    }

}