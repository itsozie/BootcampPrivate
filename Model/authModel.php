<?php

class authModel{
    public function prosesLoginAdmin($email,$password){
        $sql = "select * from admin where email='$email' and password='$password'";
        $query = koneksi()->query($sql);
        
        return $query->fetch_assoc();
    }

    public function prosesLoginPegawai($email,$password){
        $sql ="select * from tbl_pegawai where email='$email' and password='$password'";
        $query = koneksi()->query($sql);  

        return $query->fetch_assoc();
    }
}


// $tes = new authModel();
// var_export($tes->prosesLoginAdmin('ivenapp@gmail.com','ivonapp'));die;