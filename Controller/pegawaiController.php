<?php
class pegawaiController{
    private $model;
    public function __construct(){
        $this -> model = new pegawaiModel;
    }
    
    public function index(){
        if ($_SESSION['babu']) {
            require_once("View/User/index.php");
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }
}