<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 03/12/15
 * Time: 2:03
 */

namespace app\Controllers;


use app\Core\Auth;
use app\Core\Controller;
use app\Models\Category;

class CategoryController extends Controller
{
    private $petugas;

    function __construct()
    {
        parent::__construct();
        if(Auth::petugas() == null){
            header("Location: ".base."/Auth");
        }else{
            $this->petugas = Auth::petugas();
        }
    }

    public function index(){
        $cat = Category::all();
        $this->view->render('admin/category',[
            'categories' => $cat,
            'petugas' => $this->petugas
        ]);
    }

    public function add(){
        $this->view->render('admin/add_category',['petugas' => $this->petugas]);
    }

    public function prosesAdd(){
        $cat = new Category();
        $cat->CategoryName = $_POST['name'];
        $cat->save();
        header("Location: ".base."/Category");
    }

    public function edit($categoryID){
        $category = Category::find($categoryID);
        $this->view->render('admin/add_category',[
            'category' => $category,
            'petugas' => $this->petugas
        ]);
    }

    public function prosesEdit($categoryID){
        $cat = Category::find($categoryID);
        $inserted = $_POST['name'];
        $deleted = $cat->CategoryName;
        $boleh = false;
        for($i=0;$i<strlen($deleted);$i++){
            if($deleted[$i] < $inserted[$i] ){
                $boleh = true;
                break;
            }
        }
        $cat->CategoryName = ($boleh)?$inserted:$deleted;
        $cat->update();
        header("Location: ".base."/Category");
    }

    public function delete($categoryID){
        Category::destroy($categoryID);
        header("Location: ".base."/Category");
    }
}