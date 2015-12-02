<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 0:03
 */

namespace app\Core;

class Controller
{

    public function __construct()
    {
        $this->view = new View();
    }

}