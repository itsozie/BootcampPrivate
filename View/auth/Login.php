<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>IvenApp</title>
</head>
<body>
<div class="container login-container">
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
		}elseif ($_GET['pesan']=="bobol") {
            echo "<div class='alert alert-danger'>Anda Harus Login !</div>";
        }elseif ($_GET['pesan']=="keluar") {
            echo "<div class='alert alert-primary'>Anda telah keluar</div>";
	}
}
	?>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Admin</h3>
                    <form method="post" action="index.php?page=auth&aksi=loginAdmin">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 login-form-2">
                    <h3>Login for Pegawai</h3>
                    <form method="post" action="index.php?page=auth&aksi=loginPegawai">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>