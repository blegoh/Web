<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 9:45
 */

namespace app\Controllers;


use app\Core\Controller;

class AuthController extends Controller
{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login(){
        $this->view->render('login');
    }


    public function register(){
        $this->view->render('register');
    }
}