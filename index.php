<?php
require_once("koneksi.php");
require_once("Model/authModel.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $page = $_GET['page']; //  nama page
    $aksi = $_GET['aksi']; // Aksi  page


    if ($page == "auth") {
        if ($aksi == 'view') {
            require_once("View/auth/login.php");
        } else if ($aksi == 'loginAslab') {
            require_once("View/auth/login_aslab.php");
        } else if ($aksi == 'loginPraktikan') {
            require_once("View/auth/login_praktikan.php");
        } else if ($aksi == 'authAslab') {
            require_once("View/menu/menu_aslab.php");
            require_once("View/aslab/index.php");
        } else if ($aksi == 'authPraktikan') {
            require_once("View/menu/menu_praktikan.php");
            require_once("View/praktikan/index.php");
        } else if ($aksi == 'logout') {
            require_once("View/auth/index.php");
        } else if ($aksi == 'daftarPraktikan') {
            require_once("View/auth/daftar_praktikan.php");
        } else if ($aksi == 'storePraktikan') {
            require_once("View/auth/index.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == 'Admin') {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'verif') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'unVerif') {
            require_once("View/daftarprak/index.php");
        } else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
    } else if ($page == 'User') {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'verif') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'unVerif') {
            require_once("View/daftarprak/index.php");
        } else {
            echo "Method Not Found";
        }
}  
    else{
    require_once('View/auth/Login.php');
    }
