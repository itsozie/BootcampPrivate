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
    <div class="row col-md-10 col-md-offset-4 custyle">
    <table class="table table-striped custab">
        <h2>Data Laporan</h2>
    <thead>    
    <tr>
            <th>No</th>
            <th>nama resi</th>
            <th>tanggal</th>
            <th>drop</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>1</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>Input</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#">Print</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>Input</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#">Print</a></td>
            </tr>
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
