<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/12/15
 * Time: 10:19
 */

namespace app\Models;


class Satpam
{
    private $type;
    private $fail;
    private $member;
    private $petugas;

    public function setUsername($username){
        $this->fail = false;
        $this->member = Member::where('MemberEmail',$username)->get();
        $this->petugas =  Petugas::where('PetugasUsername',$username)->get();
        if($this->member->count() == 0 && $this->petugas->count() ==0){
            $this->fail = true;
        }else{
            if($this->member->count() == 1){
                $this->type = "member";
            }elseif($this->petugas->count() == 1){
                $this->type = "petugas";
            }
        }
    }

    public function setPassword($password){
        if($this->fail == false){
            if($this->type == "member"){
                $this->fail = ($password == $this->member[0]->MemberPassword)? false: true;
            }else{
                $this->fail = ($password == $this->petugas[0]->PetugasPassword)? false: true;
            }
        }
    }

    public function getLogin(){
        if($this->fail == false){
            if($this->type == "member"){
                $_SESSION['member'] = $this->member[0]->MemberID;
            }else{
                $_SESSION['petugas'] = $this->petugas[0]->PetugasID;
            }
        }
        return !$this->fail;
    }

    public function getType(){
        return $this->type;
    }

}