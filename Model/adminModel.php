<?php

    class adminModel{
    //  lihat barang
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
    // update pegawai
    public function updtaePegawai($id,$nama,$email,$password,$status){
        $sql = "
                update tbl_pegawai set nama = '$nama', email ='$email',
                password='$password',status='$status' where id=$id
        ";
        $query = koneksi() -> query($sql);
    }

    public function deletePegawai($id){
        $sql = "
                delete from tbl_pegawai where id=$id
               ";
        $query = koneksi() -> query($sql);
    }

}

// $tes = new adminModel;
// var_export($tes->updtaePegawai('15','andrianto','koko@ivenapp.com','12345',''));die;