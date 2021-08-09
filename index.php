<?php
require_once("koneksi.php");
// call the model
require_once("Model/authModel.php");
// call the controller
require_once("Controller/authController.php");



if (isset($_GET['page']) && isset($_GET['aksi'])) {
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
        if ($aksi == 'view') {
            require_once("View/admin/index.php");
        } else if ($aksi =='laporan') {
            require_once("View/Admin/laporan.php");
        } else if ($aksi == 'barang') {
            require_once("View/Admin/barang.php");
        } else if ($aksi == 'user') {
            require_once("View/Admin/user.php");
        } else {
            echo "EROR 2";
        }
    } else {
        echo "EROR";
    }
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
