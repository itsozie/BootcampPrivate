<?php

class barangModel{
    public function get(){
        $sql = "
        select barang.nama, barang.nama, barang.foto, barang.jumlah, barang.status, kategori.nama_kategori
        from tbl_barang barang 
        left join tbl_kategori kategori on kategori.id = barang.id_kategori;
        ";
        $query = koneksi() -> query($sql);
        $hasil = [] ;
        
        while ($data = $query -> fetch_assoc()) {
            $hasil [] =$data;
        }
        return $hasil;
    }
}

// $tes = new barangModel;
// var_export($tes->get());die;