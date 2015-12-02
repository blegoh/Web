<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 11/10/15
 * Time: 2:29
 */

namespace app\Core;


class View
{
    function __construct(){

    }

    public function render($name, $data = []){
        extract($data);
        require_once 'views/'.$name.'.php';
    }
}