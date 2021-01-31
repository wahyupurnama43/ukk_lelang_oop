<?php

    include "./init.php";

    $l = new Login();
    if (isset($_POST['submit'])) {
        $l->register();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Leon</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

    <section class="card-register">
        <h1>Register</h1>
        <p>Selamat Datang di Leon</p>
        <div class="form">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="nama_lengkap" required placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="email" name="email" required placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" name="username" required placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" name="telpon" required placeholder="No telpon">
                </div>
                <div class="form-group">
                    <textarea name="alamat" required placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                    <input type="date" name="tgl_lahir" >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-login" name="submit" value="Register">
                </div>
                <p class="signup">Sudah Punya Akun ? <a href="./login.php">Login disini</a></p>
            </form>
        </div>
    </section>

</body>
</html>
