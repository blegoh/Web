<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 10:09
 */

namespace app\Controllers;


use app\Core\Controller;

class ErrorController extends Controller
{
    function __construct(){
        parent::__construct();
        $this->view->render('error/404');
    }
}