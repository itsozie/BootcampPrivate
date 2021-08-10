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
require_once("Controller/authController.php");
require_once("Controller/authController.php");
require_once("Controller/authController.php");



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
            echo "EROR 1";
        }


        // page Admin
    } else if ($page == 'admin') {
        require_once("View/Main/navAdmin.php");
        $admin = new adminController;
        if ($aksi == 'view') {
            $admin -> index();
        } else if ($aksi =='laporan') {
            require_once("View/Admin/laporan.php");
        } else if ($aksi == 'barang') {
            require_once("View/Admin/barang.php");
        }else {
            echo "EROR 2";
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
            echo"Kesalahan mengambil data";
        }
        
    }
    // page barang
    } else if ($page == 'barang') {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'verif') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'unVerif') {
            require_once("View/daftarprak/index.php");
        } else {
            echo "EROR 3";
        }
    }  
    else{
        header("location: index.php?page=auth&aksi=view");
    }
