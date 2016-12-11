<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/12/15
 * Time: 10:14
 */

namespace app\Core;


use app\Models\Member;
use app\Models\Petugas;

class Auth
{
    public static function member()
    {
        if(isset($_SESSION['member'])){
            return Member::find($_SESSION['member']);
        }
        return null;
    }

    public static function petugas()
    {
        if(isset($_SESSION['petugas'])){
            return Petugas::find($_SESSION['petugas']);
        }
        return null;
    }

}