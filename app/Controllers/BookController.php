<?php
/**
 * Created by PhpStorm.
 * User: gis
 * Date: 02/12/15
 * Time: 18:40
 */

namespace app\Controllers;


use app\Core\Controller;
use app\Models\Book;

class BookController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->index();
    }

    public function index(){
        $books = Book::all();

        $this->view->render('admin/book',['books' => $books]);
    }
}