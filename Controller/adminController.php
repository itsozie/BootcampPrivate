<?php
class adminController{
    private $model;

    public function __construct() {
        $this -> model = new adminModel();
    }

    // INDEX HALAMAN MENU ADMIN
    public function index(){
        if ($_SESSION['admin']) {
            require_once("View/Admin/index.php");
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }

    public function laporan(){
        if ($_SESSION['admin']) {
            require_once("View/Admin/laporan.php");
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }

    // HALAMAN USER
    public function getUser(){
        $data = $this-> model -> getUser();
        extract($data);
        require_once("View/Admin/user.php");
    }

    public function addUser(){
        if ($_SESSION['admin']) {
        $nama =$_POST['nama'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $status =$_POST['status'];

        if ($this -> model -> tambahPegawai($nama,$email,$password,$status)) {
            header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
        }else {
            header('Location: index.php?page=admin&aksi=user&pesan=gagal');
        }
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }

    public function updateUser(){
        if ($_SESSION['admin']) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $status = $_POST['status'];
    
            if ($this -> model -> updatePegawai($id,$nama,$email,$password,$status)) {
                header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
            }else {
                header('Location: index.php?page=admin&aksi=user&pesan=gagal');
            }
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }


    public function editUser(){
        if ($_SESSION['admin']) {
            $id = $_GET['id'];
            $data = $this->model->getId($id);
            extract($data);
            require_once("View/Admin/edit.php");   
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }   
    }

    
        
    public function deleteUser(){
        if ($_SESSION['admin']) {
            $id = $_GET['id'];
        if ($this -> model -> deletePegawai($id)) {
            header('Location: index.php?page=admin&aksi=user&pesan=berhasil');
        }else {
            header('Location: index.php?page=admin&aksi=user&pesan=gagal');
        }
        }else {
            header("Location: index.php?page=auth&aksi=view&pesan=bobol");
        }
    }
    // END USER

    //  HALAMAN BARANG

    public function getBarang(){
        $data = $this-> model -> getBarang();
        $kategori = $this -> model -> getKategori();
        extract($data);
        extract($kategori);
        require_once("View/Admin/barang.php"); 
    }

    public function addbarang(){
        if ($_SESSION['admin']) {
            $id =$_POST['id'];
            $nama =$_POST['nama'];
            $foto =$_POST['foto'];
            $jumlah =$_POST['jumlah'];
            $status =$_POST['status'];

            if ($this -> model -> addBarang($id,$nama,$foto,$jumlah,$status)) {
                header('Location: index.php?page=admin&aksi=barang&pesan=berhasil');
            }else {
                header('Location: index.php?page=admin&aksi=barang&pesan=gagal');
            }
            }else {
                header("Location: index.php?page=auth&aksi=view&pesan=bobol");
            }
        }

        public function Aktifkan(){
            if ($_SESSION['admin']) {
                $id = $_GET['id'];
            if ($this -> model -> Aktifkan($id)) {
                header('Location: index.php?page=admin&aksi=barang&pesan=berhasil');
            }else {
                header('Location: index.php?page=admin&aksi=barang&pesan=gagal');
            }
            }else {
                header("Location: index.php?page=auth&aksi=view&pesan=bobol");
            }
        }
        public function nonAktifkan(){
            if ($_SESSION['admin']) {
                $id = $_GET['id'];
            if ($this -> model -> nonAktifkan($id)) {
                header('Location: index.php?page=admin&aksi=barang&pesan=berhasil');
            }else {
                header('Location: index.php?page=admin&aksi=barang&pesan=gagal');
            }
            }else {
                header("Location: index.php?page=auth&aksi=view&pesan=bobol");
            }
        }
    // END BARANG
}

