<?php
class authController{
    private $model;
    public function __construct(){
        $this->model= new authModel();
    }
    public function login(){
        require_once("View/auth/Login.php");
    }
    public function loginAdmin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = $this->model->prosesLoginAdmin($email,$password);
        
        if ($data) {
            $_SESSION['role'] = 'admin';
            $_SESSION['admin'] = $data;

            header("location:index.php?page=admin&aksi=view");
        }else {
            header("location:index.php?page=auth&aksi=view&pesan=gagal");
            }
    }
    public function loginPegawai(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = $this -> model ->prosesLoginPegawai($email,$password);

        if ($data) {
            $_SESSION['role'] = 'babu';
            $_SESSION['babu'] = $data;

            header("Location: index.php?page=babu&aksi=view");
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=gagal");
        }
    }

    public function logout(){
        session_destroy();
        header("location:index.php?page=auth&aksi=view&pesan=keluar");
    }
}
