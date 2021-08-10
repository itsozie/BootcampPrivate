<?php

class pegawaiModel{

  public function get(){
    if ($_SESSION['pegawai']) {
      require_once("View/User/index.php");
    } else {
      header("Location: index.php?page=auth&aksi=view&pesan=bobol");
    }
  }
    
}

// $tes = new pegawaiModel;
// var_export($tes->get());die;