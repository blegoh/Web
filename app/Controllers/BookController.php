<?php
/**
 * Created by PhpStorm.
 * User: gis
 * Date: 02/12/15
 * Time: 18:40
 */

namespace app\Controllers;


use app\Core\Auth;
use app\Core\Controller;
use app\Models\Book;
use app\Models\Category;
use app\Models\Item;
use app\Models\Publisher;
use Carbon\Carbon;
use Valitron\Validator;

class BookController extends Controller
{
    private $petugas;

    function __construct()
    {
        parent::__construct();
        $this->petugas = Auth::petugas();
    }

    public function index(){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $books = Book::all();
        $this->view->render('admin/book',[
            'books' => $books,
            'petugas' => $this->petugas
        ]);
    }

    public function add(){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $categories = Category::all();
        $publishers = Publisher::all();
        $this->view->render('admin/add_book',[
            'categories' => $categories,
            'publishers' => $publishers,
            'petugas' => $this->petugas
            ]
        );
    }

    public function prosesAdd(){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $valid = new Validator($_POST);
        $valid->rule('required', ['title', 'author','publisher','category']);
        if($valid->validate()) {
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
            if($book->save()){
                if($_FILES['photo']['name']!=""){
                    $uploaddir = '/var/www/limsmvc/img/';
                    $uploadfile = $uploaddir . $book->BookID;
                    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
                }
            }
            header("Location: ".base."/Book");
        } else {
            // Errors
            print_r($valid->errors());
        }

    }

    public function edit($bookID){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $book = Book::find($bookID);
        $categories = Category::all();
        $publishers = Publisher::all();
        $this->view->render('admin/add_book',[
                'categories' => $categories,
                'publishers' => $publishers,
                'book' => $book,
                'petugas' => $this->petugas
            ]
        );
    }

    public function prosesEdit($bookID){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $book = Book::find($bookID);
        $book->BookTitle = $_POST['title'];
        $book->BookAuthor = $_POST['author'];
        $book->PublisherID = $_POST['publisher'];
        $book->CategoryID = $_POST['category'];
        $book->BookPageCount = $_POST['pageCount'];
        $book->BookPublished = $_POST['year'];
        $book->BookDescription = $_POST['des'];
        $book->BookPrice = $_POST['price'];
        if($book->update()){
            if($_FILES['photo']['name']!=""){
                $uploaddir = '/var/www/limsmvc/img/';
                $uploadfile = $uploaddir . $book->BookID;
                move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
            }
        }
        header("Location: ".base."/Book");
    }

    public function delete($bookID){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        Book::destroy($bookID);
        header("Location: ".base."/Book");
    }

    public function items($bookID){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $book = Book::find($bookID);
        $this->view->render('admin/book_items',[
            'book' => $book,
            'petugas' => $this->petugas
        ]);
    }

    public function addItem($bookID){
        if($this->petugas == null){
            header("Location: ".base."/Auth");
            exit();
        }
        $item = new Item();
        $item->BookID = $bookID;
        $item->save();
        header("Location: ".base."/Book/items/$bookID");
    }

    public function category($category){
        $cat = Category::find($category);
        $books = Book::where('CategoryID',$category)->get();
        $data['cat'] = $cat;
        $data['books'] = $books;
        $data['categories'] = Category::all();
        if(Auth::member() != null){
            $data['member'] = Auth::member();
        }
        $this->view->render('member/category',$data);
    }

    public function detail($book){
        $book = Book::find($book);
        $data['book'] = $book;
        $data['categories'] = Category::all();
        if(Auth::member() != null){
            $data['member'] = Auth::member();
        }
        $this->view->render('member/detail',$data);
    }
}