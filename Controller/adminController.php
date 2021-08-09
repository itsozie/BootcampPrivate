<?php
class adminController{
    private $model;

    public function __construct() {
        $this -> model = new adminModel();
    }

    public function index(){
        $idAdmin = $_SESSION['aslab'];
    }
}