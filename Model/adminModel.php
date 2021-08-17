<?php

    class adminModel{
    //  lihat User
        public function getUser(){
         $sql ="
                select * from tbl_pegawai
         ";
         $query = koneksi() -> query($sql);
         $hasil = [];
         while ($data = $query -> fetch_assoc()) {
             $hasil [] = $data;
         }
         return $hasil;
     }

    // barang get barang
    public function getBarang(){
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

    //  input pegawai
    public function tambahPegawai($nama,$email,$password,$status){
        if ($status=='Pembantu') {
            $status = 0;
        }elseif ($status=='Umum') {
            $status = 1;
        }else {
            $status = 2;
        }
        $sql = "
                insert into tbl_pegawai(nama,email,password,status)
                values('$nama','$email','$password',$status)
        ";
        $query = koneksi() -> query($sql);
    }

    // UPdate pegawai
    public function updatePegawai($id,$nama,$email,$password,$status){
        if ($status=='Pembantu') {
            $status = 0;
        }elseif ($status=='Umum') {
            $status = 1;
        }else {
            $status = 2;
        }
        $sql = "
                update tbl_pegawai set nama = '$nama', email ='$email',
                password='$password',status='$status' where id='$id'
        ";
        $query = koneksi() -> query($sql);
    }

    //Hapus Pegawai 
    public function deletePegawai($id){
        $sql = "
                delete from tbl_pegawai where id=$id
               ";
        $query = koneksi() -> query($sql);
    }

        // ambil ID
        public function getId($id){
            $sql = "
                    select * from tbl_pegawai where id=$id
            ";
            $query = koneksi() -> query($sql);
            return $query->fetch_assoc();
        }

}

// $tes = new adminModel;
// var_export($tes->getBarang());die;