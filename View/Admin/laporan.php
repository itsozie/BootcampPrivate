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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- end add -->

    <!-- modal update -->
    <div class="modal fade" id="modalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- end update -->

    <!-- modal delete -->
    <div class="modal fade" id="modaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        anda yakin ingin menghapus data ??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">batal</button>
        <button type="button" class="btn btn-primary">Oke</button>
      </div>
    </div>
  </div>
</div>
    <!-- end delete -->

    <div class="row col-md-10 col-md-offset-4 custyle">
        <h2>Data Laporan</h2>
    <table class="table table-striped custab">
    <thead>
    <tr>
        <th>
    <a href="#" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#modaladd"><b>+</b> Add </a>
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
        <?php for ($i=0; $i < 5; $i++) { ?>
             <tr>
             <td>1</td>
             <td>Blogs</td>
             <td>Parent Blogs</td>
             <td>Input</td>
             <td>Input</td>
             <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#modalupdate" href="#">Edit</a>
              <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modaldelete" href="#">Del</a></td>
         </tr>
       <?php } ?>
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
</html>
