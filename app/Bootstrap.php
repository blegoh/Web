<?php

/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 0:52
 */
require_once __DIR__ . '/../vendor/autoload.php';
define('base','http://localhost/limsmvc');

class Bootstrap
{
    function __construct(){
        $this->db();
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url =  explode('/',$url);
        //print_r($url);
        $file = 'app/Controllers/'.$url[0].'Controller.php';
        if(empty($url[0])){
            $controller = new \app\Controllers\HomeController();
            $controller->index();
            return false;
        }

        if(file_exists($file)){
            $a = "\\app\\Controllers\\".$url[0]."Controller";
            $controller = new $a;
            if(isset($url[1])){
                if(isset($url[2])){
                    if(isset($url[3])){
                        $controller->{$url[1]}($url[2],$url[3]);
                    }else{
                        $controller->{$url[1]}($url[2]);
                    }
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->index();
            }
        }else{
            $controller = new \app\Controllers\ErrorController();
            return false;
        }
    }

    function db(){
        $capsule = new Illuminate\Database\Capsule\Manager();
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'Library',
            'username'  => 'root',
            'password'  => 'hornline',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

// Make this Capsule instance available globally via static methods
        $capsule->setAsGlobal();

// Setup the Eloquent ORM
        $capsule->bootEloquent();
    }
}
