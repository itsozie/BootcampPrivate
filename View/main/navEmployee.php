<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <title>IvenApp</title>
</head>
<body>
<nav class="navbar dark bg-dark">
  <a class="navbar-brand">IvenApp</a>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Cari Barang" aria-label="Search">
  <div class="dropdown">
  <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Selamat datang <?= $_SESSION['babu']['nama'] ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php?page=auth&aksi=logout">Logout</a>
  </div>
</div>
  </form>
</nav>
</body>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/popper.min.js"></script>
</html>
