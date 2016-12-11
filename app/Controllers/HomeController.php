<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 2:27
 */

namespace app\Controllers;


use app\Core\Auth;
use app\Core\Controller;
use app\Models\Book;
use app\Models\Category;

class HomeController extends Controller
{

    private $categories;

    function __construct(){
        parent::__construct();
        $this->categories = Category::all();
    }

    function index(){
        $terbaru = Book::orderBy('BookID','desc')->skip(0)->take(6)->get();
        $data['categories'] = $this->categories;
        $data['terbaru'] = $terbaru;
        if(Auth::member() != null){
            $data['member'] = Auth::member();
        }
        $this->view->render('home',$data);
        $this->view->data = "asu";
    }
}