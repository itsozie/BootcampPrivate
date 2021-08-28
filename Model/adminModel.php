<?php

    class adminModel{
    // MENUS USER
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

        // ambil ID uSER
        public function getId($id){
            $sql = "
                    select * from tbl_pegawai where id=$id
            ";
            $query = koneksi() -> query($sql);
            return $query->fetch_assoc();
        }
    // END USER

    // MENUS BARANG
        // get barang
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
        // tambah barang
    public function tambah($post){
    global $conn;
    $nama=htmlspecialchars($post["nama"]);
    $jumlah=htmlspecialchars($post["jumlah"]);

    // upload gambar dulu
        $foto = upload();
        if (!$foto) {
            return false;
        }

        $query= "INSERT INTO barang
        VALUES ('$nama', '', '$foto', '$jumlah')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

        }

        function upload(){
        $namaFile   = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error      = $_FILES['foto']['error'];
        $tmpName    = $_FILES['foto']['tmp_name'];   
        
        if ($error===4) {
            echo "
                <script>
                alert('pilih gambar');
                </script>
            ";

            return false;
        }
        // extensi gambar
        $extGmbrValid = ['jpg', 'jpeg', 'png'];
        $extGmbr = explode('.',$namaFile);
        $extGmbr = strtolower(end($extGmbr));

        if (!in_array($extGmbr, $extGmbrValid)) {
            echo "
            <script>
            alert('pilih jpg/png/jpeg');
            </script>
        ";

        return false;
        }

        // ukuran gambar
        if ($ukuranFile > 1000000) {
            echo "
            <script>
            alert('ukuran gambar terlalu besar');
            </script>
        ";
        }

        // pindah file
        // generate
        $newFileBaru = uniqid();
        $newFileBaru .= '.';
        $newFileBaru .= $extGmbr;



        move_uploaded_file($tmpName,'../asset/img/'. $newFileBaru);
        return $newFileBaru;
        }


}

// $tes = new adminModel;
// var_export($tes->updatePegawai('13','ramdhani','kiki@ivenapp.com','123','2'));die;