<?php
/**
 * Created by PhpStorm.
 * User: gis
 * Date: 08/12/15
 * Time: 14:40
 */

namespace app\Controllers;


use app\Core\Auth;
use app\Core\Controller;
use app\Models\Member;
use Carbon\Carbon;

class MemberController extends Controller
{
    private $petugas;
    public function __construct()
    {
        parent::__construct();
        if(Auth::petugas() == null){
            header("Location: ".base."/Auth");
        }else{
            $this->petugas = Auth::petugas();
        }
    }

    public function index(){
        $this->show();
    }

    public function show($validate = 1,$active = 1){
        $now = Carbon::now();
        if($active == 1){
            $members = Member::where('Validated',$validate)
                ->where('MemberExpiredDate','>',$now)
                ->get();
        }else{
            $members = Member::where('Validated',$validate)
                ->where('MemberExpiredDate','<',$now)
                ->get();
        }
        $kode = ($validate == 1 )?($active == 1)? 1 : 3 : 2;
        $this->view->render('admin/member',[
            'members' => $members,
            'kode' => $kode,
            'petugas' => $this->petugas
        ]);
    }

    public function validasi($memberID){
        $member = Member::find($memberID);
        $member->Validated = 1;
        $member->update();
        header('Location: '.base."/Member/show/0");
    }
}