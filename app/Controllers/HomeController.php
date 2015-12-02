<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 2:27
 */

namespace app\Controllers;


use app\Core\Controller;

class HomeController extends Controller
{
    function __construct(){
        parent::__construct();
        $this->index();
    }

    function index(){
        $this->view->render('home');
        $this->view->data = "asu";
    }
}