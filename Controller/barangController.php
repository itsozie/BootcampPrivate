<?php
class barangController{

    private $model;
    public function __construct(){
        $this -> model = new barangModel();
    }
    
    public function index(){
            $data = $this-> model -> get();
            extract($data);
            require_once("View/Admin/barang.php"); 
    }

}