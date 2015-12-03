<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 03/12/15
 * Time: 1:22
 */

namespace app\Controllers;


use app\Core\Controller;
use app\Models\Publisher;

class PublisherController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $publishers = Publisher::all();
        $this->view->render('admin/publisher',['publishers' => $publishers]);
    }

    public function add(){
        $this->view->render('admin/add_publisher');
    }

    public function prosesAdd(){
        $pub = new Publisher();
        $pub->PublisherName = $_POST['name'];
        $pub->PublisherAddress = $_POST['address'];
        $pub->PublisherCity = $_POST['city'];
        $pub->PublisherPhone = $_POST['phone'];
        $pub->save();
        header("Location: ".base."/Publisher");
    }

    public function edit($publisherID){
        $publisher = Publisher::find($publisherID);
        $this->view->render('admin/add_publisher',[
            'publisher' => $publisher
        ]);
    }

    public function prosesEdit($publisherID){
        $pub = Publisher::find($publisherID);
        $pub->PublisherName = $_POST['name'];
        $pub->PublisherAddress = $_POST['address'];
        $pub->PublisherCity = $_POST['city'];
        $pub->PublisherPhone = $_POST['phone'];
        $pub->update();
        header("Location: ".base."/Publisher");
    }

    public function delete($publisherID){
        Publisher::destroy($publisherID);
        header("Location: ".base."/Publisher");
    }
}