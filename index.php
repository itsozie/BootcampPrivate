<?php
require_once("koneksi.php");
// call the model
require_once("Model/authModel.php");
require_once("Model/adminModel.php");
require_once("Model/pegawaiModel.php");
require_once("Model/barangModel.php");
require_once("Model/kategoriModel.php");
require_once("Model/orderModel.php");
// call the controller
require_once("Controller/authController.php");
require_once("Controller/adminController.php");
require_once("Controller/pegawaiController.php");
require_once("Controller/barangController.php");
require_once("Controller/kategoriController.php");
require_once("Controller/orderController.php");



if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page']; //  nama page
    $aksi = $_GET['aksi']; // Aksi  page

        // page Auth
    if ($page == "auth") {
        $auth = new authController;
        if ($aksi == 'view') {
            $auth -> login();
        } else if ($aksi == 'logout') {
            $auth-> logout();
        } elseif ($aksi == 'loginAdmin') {
            $auth -> loginAdmin();
        } elseif ($aksi == 'loginPegawai') {
            $auth -> loginPegawai();
        } 
        else {
            require_once("View/main/error.php");
        }


        // page Admin
    } else if ($page == 'admin') {
        require_once("View/Main/navAdmin.php");
        $admin = new adminController;
        if ($aksi == 'view') {
            $admin -> index();
        } else if ($aksi =='laporan') {
            $admin -> laporan();
        } else if ($aksi == 'user') {
            $admin -> getUser();
        }elseif ($aksi=='addUser') {
            $admin -> addUser();
        }elseif ($aksi=='edit') {
            $admin -> editUser();
        }elseif ($aksi=='update') {
            $admin -> updateUser();
        }elseif ($aksi=='hapus') {
            $admin -> deleteUser();
        }else {
            echo "EROR";
        }

        // page Babu
    } elseif ($page=='babu') {
        require_once("View/main/navEmployee.php");
        $babu = new pegawaiController;
        if ($aksi=='view') {
            $babu -> index();
        } elseif ($aksi=='ambil') {
            require_once("View/User/checkout.php");
        } else{
            require_once("View/main/error.php");
        } 
    }

    // page barang
    } else if ($page == 'barang') {
        require_once("View/Main/navAdmin.php");
        $barang = new barangController;
        if ($aksi == 'view') {
            $barang = index();
        } else if ($aksi == 'verif') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'unVerif') {
            require_once("View/daftarprak/index.php");
        } else {
            require_once("View/main/error.php");
        }
    }  
    else{
        header("location: index.php?page=auth&aksi=view");
    }
