<?php

    include './init.php';

    $l = new Login();
    if (isset($_POST['submit'])) {
         $login = $l->login();
    }else{
        $login = 'true';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Leon</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

    <section class="card-login">


        <h1>Login</h1>
        <p>Selamat Datang di Leon</p>
        <?php
            if ($login == false) {
                echo "<p  style='color:red'>Username dan Password Salah !! </p>";
            }
        ?>

        <div class="form">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-login" value="Login" name="submit">
                </div>
                <p class="signup">Belum Punya Akun ? <a href="./register.php">Daftar disini</a></p>
            </form>
        </div>
    </section>


</body>
</html>
