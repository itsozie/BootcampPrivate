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
<main class="edit-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Edit Data</h2></div>
                    <div class="card-body">

                        <form action="index.php?page=admin&aksi=update" method="POST">
                            <div class="form-group row">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-6">
                                    <input type="text"  class="form-control" name="nama" value="<?= $data['nama'] ?>" required >
                                </div>
                            </div>

                        <form action="" method="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                <div class="col-md-6">
                                    <input type="text"  class="form-control" name="email" value="<?= $data['email'] ?>" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Status</label>
                                <div class="col-md-6">
                                <select class="form-control" value="<?= $data['status'] ?>" name="status">
                                <option>Pembantu</option>
                                <option>Umum</option>
                                <option>Cleaning</option>
                                </select>
                                </div>
                            </div>

                           <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ubah Data
                                </button>
                                <a href="index.php?page=admin&aksi=user" type="submit" class="btn btn-danger" >
                                    Batal
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</center>
</body>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/popper.min.js"></script>
</html>
