<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 03/12/15
 * Time: 2:03
 */

namespace app\Controllers;


use app\Core\Controller;
use app\Models\Category;

class CategoryController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $cat = Category::all();
        $this->view->render('admin/category',[
            'categories' => $cat
        ]);
    }

    public function add(){
        $this->view->render('admin/add_category');
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
            'category' => $category
        ]);
    }

    public function prosesEdit($categoryID){
        $cat = Category::find($categoryID);
        $cat->CategoryName = $_POST['name'];
        $cat->update();
        header("Location: ".base."/Category");
    }

    public function delete($categoryID){
        Category::destroy($categoryID);
        header("Location: ".base."/Category");
    }
}