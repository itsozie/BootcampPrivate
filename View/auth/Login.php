<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Register Form</title>
</head>
<body>
<div class="container">
<div id="login bg-dark">
<h3 class="text-center text-white pt-5">Login Akun</h3>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div class="login-box col-md-12">
                <form id="login-form" class="form" action="autentikasi.php" method="post">
                    <h3 class="text-center text-info">Login</h3>
                    <?php if (isset($error) ) : ?>
                        <h1>error</h1>
                    <?php endif; ?>
                    <div class="form-group">
                    <label for="username" class="text-info">Username:</label><br>
                    <input type="text" name="username" id="username" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                    <label for="remember-me" class="text-info"><span>Remember me</span> 
                    <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                    <button type="submit" name="login" class="btn btn-primary">Masuk!</button>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
    <script src="./assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>