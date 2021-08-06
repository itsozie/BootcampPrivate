<?php

class authModel{
    public function authLogin($email,$password){
        $sql = "select * from tbl_pegawai where email='$email and password='$password";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}
$tes = new authModel();
var_export($tes->authLogin('ivenapp@gmail.com','ivonapp'));die;