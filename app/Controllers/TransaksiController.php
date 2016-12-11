<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/12/15
 * Time: 19:09
 */

namespace app\Controllers;


use app\Core\Auth;
use app\Core\Controller;
use app\Models\Item;
use app\Models\Member;
use app\Models\Peminjaman;
use Carbon\Carbon;

class TransaksiController extends Controller
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

    public function peminjaman(){
        $this->view->render('admin/peminjaman',[
            'petugas' => $this->petugas
        ]);
    }

    public function pengembalian(){
        $this->view->render('admin/pengembalian',[
            'petugas' => $this->petugas
        ]);
    }

    public function prosesPinjam(){
        $pesan = "";
        $error = false;
        $member = $_POST['member'];
        $item = $_POST['item'];
        if($member == ""){
            $error = true;
            $pesan .= "Member ID harus diisi<br />";
        }else{
            $mbr = Member::find($member);
            if(!isset($mbr)){
                $error = true;
                $pesan .= "Member tidak terdaftar<br />";
            }else{
                //cek sudah melakukan peminjaman berapa kali
                $count = $mbr->pinjams()->where('TanggalKembali', null)->get()->count();
                if($count > 3){
                    $error = true;
                    $pesan .= "Terlalu banyak meminjam<br />";
                }
            }
        }
        if($item == ""){
            $error = true;
            $pesan .= "Item ID harus diisi<br />";
        }else{
            $itm = Item::find($item);
            //var_dump($itm);
            if(!isset($itm)){
                $error = true;
                $pesan .= "Item tidak terdaftar<br />";
            }elseif($itm->ItemStatus != 'available'){
                $error = true;
                $pesan .= "Item tidak tersedia<br />";
            }
        }
        if(!$error){
            $pesan = "berhasil";
            $pinjam = new Peminjaman();
            $pinjam->ItemID = $item;
            $pinjam->MemberID = $member;
            $pinjam->PetugasID = $this->petugas->PetugasID;
            $pinjam->TanggalPinjam = Carbon::now();
            $pinjam->TanggalHarusKembali = Carbon::now()->addWeek(1);
            $pinjam->TanggalKembali = null;
            $pinjam->save();
            $itm = Item::find($item);
            $itm->ItemStatus = 'borrowed';
            $itm->update();
        }
        $_SESSION['msg'] = $pesan;
        $_SESSION['error'] = $error;
        header("Location: ".base."/Transaksi/peminjaman");
    }

    public function prosesKembali(){
        $item = $_POST['item'];
        $pmj = Peminjaman::where('ItemID',$item)->orderBy('PeminjamanID','desc')->first();
        $pmj->TanggalKembali = Carbon::now();
        $pmj->update();
        $itm = Item::find($item);
        $itm->ItemStatus = 'available';
        $itm->update();
        header("Location: ".base."/Transaksi/pengembalian");
    }
}