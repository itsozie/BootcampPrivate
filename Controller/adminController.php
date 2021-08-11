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

    public function getUser(){
        $data = $this-> model -> getUser();
        extract($data);
        require_once("View/Admin/user.php");
    }

    public function addUser(){
        $nama =$_POST['nama'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $status =$_POST['status'];

        if ($this -> model -> tambahPegawai($nama,$email,$password,$status)==NULL) {
            header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
        }else {
            header('Location: index.php?page=admin&aksi=user&pesan=gagal');
        }
    }

    public function updateUser(){
        $id=$_GET['id'];
        $nama  = $_POST['nama'];
        $email = $_POST['email'];
        $pass  = $_POST['password'];
        $status= $_POST['status'];
        if ($this -> model -> updatePegawai($nama,$email,$password,$status,$id)) {
            header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
        }else {
            header('Location: index.php?page=admin&aksi=user&pesan=gagal');
        }
    }

    public function deleteUser(){
        $id = $_GET['id'];
        if ($this -> model -> deletePegawai($id)) {
            header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
        }else {
            header('Location: index.php?page=admin&aksi=user&pesan=gagal');
        }
    }
}
