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
use app\Models\Category;
use app\Models\Item;
use app\Models\Publisher;
use Carbon\Carbon;

class BookController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $books = Book::all();
        $this->view->render('admin/book',['books' => $books]);
    }

    public function add(){
        $categories = Category::all();
        $publishers = Publisher::all();
        $this->view->render('admin/add_book',[
            'categories' => $categories,
            'publishers' => $publishers
            ]
        );
    }

    public function prosesAdd(){
        $book = new Book();
        $book->BookTitle = $_POST['title'];
        $book->BookAuthor = $_POST['author'];
        $book->PublisherID = $_POST['publisher'];
        $book->CategoryID = $_POST['category'];
        $book->BookPageCount = $_POST['pageCount'];
        $book->BookPublished = $_POST['year'];
        $book->BookDescription = $_POST['des'];
        $book->BookPhoto = "acas";
        $book->BookDateAdd = Carbon::now();
        $book->BookPrice = $_POST['price'];
        $book->save();
        header("Location: ".base."/Book");
    }

    public function edit($bookID){
        $book = Book::find($bookID);
        $categories = Category::all();
        $publishers = Publisher::all();
        $this->view->render('admin/add_book',[
                'categories' => $categories,
                'publishers' => $publishers,
                'book' => $book
            ]
        );
    }

    public function prosesEdit($bookID){
        $book = Book::find($bookID);
        $book->BookTitle = $_POST['title'];
        $book->BookAuthor = $_POST['author'];
        $book->PublisherID = $_POST['publisher'];
        $book->CategoryID = $_POST['category'];
        $book->BookPageCount = $_POST['pageCount'];
        $book->BookPublished = $_POST['year'];
        $book->BookDescription = $_POST['des'];
        $book->BookPrice = $_POST['price'];
        $book->update();
        header("Location: ".base."/Book");
    }

    public function delete($bookID){
        Book::destroy($bookID);
        header("Location: ".base."/Book");
    }

    public function items($bookID){
        $book = Book::find($bookID);
        $this->view->render('admin/book_items',['book' => $book]);
    }

    public function addItem($bookID){
        $item = new Item();
        $item->BookID = $bookID;
        $item->save();
        header("Location: ".base."/Book/items/$bookID");
    }
}