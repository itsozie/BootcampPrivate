<?php
require_once('./View/main/navAdmin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <title>IvenApp</title>
</head>
<body>
	
<center>
<!-- modal add -->
<div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="index.php?page=admin&aksi=addUser" method="POST">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="teks" name="nama" class="form-control" id="nama" required placeholder="Masukkan Nama">
    <label for="email">Email address</label>
    <input type="email" name="email"  class="form-control" id="email" required placeholder="name@example.com">
    <label for="password">Password</label>
    <input type="password" name="password"  class="form-control" id="password" required placeholder="Masukkan Password">
    <label for="status">Pilih status</label>
    <select class="form-control" required name="status" id="status">
      <option>Pembantu</option>
      <option>Umum</option>
      <option>Cleaning</option>
    </select>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
    <!-- end add -->

        <!-- modal kategori -->
        <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- end add -->
    
    <div class="row col-md-10 col-md-offset-4 custyle">
        <h2>Data Barang</h2>
    <table class="table table-striped custab">
    <thead>
    <tr>
        <th>
    <a href="#" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#modaladd"><b>+</b> Add Barang </a>
        </th>
    </tr>      
    <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
      
      <?php $i=1;
      foreach($data as $row) : ?>
             <tr>
             <td><?= $i ?></td>
             <td><?= $row['foto'] ?></td>
             <td><?= $row['nama'] ?></td>
             <td><?= $row['nama_kategori'] ?></td>
             <td><?= $row['jumlah'] ?></td>
             <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#modalupdate" href="#">Edit</a>
              <a href="#" class="btn btn-danger btn-xs" href="#">Del</a></td>
         </tr>
         <?php $i++;
        endforeach;
         ?>

            </tbody>
    </table>
            <a href="index.php?page=admin&aksi=view" class="btn btn-danger">Back </a>
    </div>
</center>

</body>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/script.js"></script>
</html>
