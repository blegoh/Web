<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 9:45
 */

namespace app\Controllers;


use app\Core\Controller;
use app\Models\Category;
use app\Models\Member;
use app\Models\Satpam;
use Carbon\Carbon;

class AuthController extends Controller
{

    private $categories;

    function __construct(){
        parent::__construct();
        $this->categories = Category::all();
    }

    public function index(){
        $this->login();
    }

    public function login(){
        $this->view->render('login',[
            'categories' => $this->categories
        ]);
    }

    public function prosesLogin(){
        $satpam = new Satpam();
        $satpam->setUsername($_POST['username']);
        $satpam->setPassword($_POST['password']);
        if($satpam->getLogin()){
            if($satpam->getType() == 'petugas'){
                header('Location: '.base.'/Book/');
            }else{
                header('Location: '.base);
            }
        }else{
            header('Location: '.base.'/Auth/');
        }
    }

    public function register(){
        $this->view->render('register',[
            'categories' => $this->categories
        ]);
    }

    public function prosesRegister(){
        $member = new Member();
        $member->MemberName = $_POST['name'];
        $member->MemberEmail = $_POST['email'];
        $member->MemberAddress = $_POST['address'];
        $member->MemberPhone = $_POST['phone'];
        $member->MemberPassword = $_POST['password'];
        $member->MemberRegisterDate = Carbon::now();
        $member->MemberExpiredDate = new Carbon('next year');
        $member->save();
        header('Location: '.base);
    }

    public function logout(){
        if(isset($_SESSION['member'])){
            unset($_SESSION['member']);
        }elseif($_SESSION['petugas']){
            unset($_SESSION['petugas']);
        }
        header('Location: '.base.'/Auth');
    }
}