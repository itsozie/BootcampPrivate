<?php
class adminController{
    private $model;

    public function __construct() {
        $this -> model = new adminModel();
    }

    public function index(){
        if ($_SESSION['admin']) {
            require_once("View/Admin/index.php");
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }
}
