<?php
    include "./init.php";

    session_start();
    if ($_SESSION['login'] !== 1) {
        header('Location: login.php');
    }
    if ($_SESSION['level'] === '0') {
        header('Location: dashboard_user.php');
    }

    $d = new Dashboard();
    $user = $d->count('tb_user');
    $lelang = $d->count('tb_lelang');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Leon</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <!-- sidebar -->
    <section class="dashbaord">
        <div class="sidebar">
            <div class="logo">
                <img src="./../assets/img/logo.svg" alt="">
            </div>
            <nav>
                <ul>
                    <a href="dashboard.php"><li class="<?php echo (!isset($_GET['page'])) ? 'active' : ''  ?>">Dashboard</li></a>
                </ul>
                <ul>
                    <a href="?page=user"><li class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'user')   ? 'active' : ''  ?>">User</li></a>
                </ul>
                <ul>
                    <a href="?page=petugas"><li class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'petugas') ? 'active' : ''  ?>">Petugas</li></a>
                </ul>
                <ul>
                    <a href="?page=kategori"><li class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'kategori') ? 'active' : ''  ?>">Kategori</li></a>
                </ul>
                <ul>
                    <a href="?page=barang"><li class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'barang') ? 'active' : ''  ?>">Barang</li></a>
                </ul>
                <ul>
                    <a href="?page=winner"><li class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'winner') ? 'active' : ''  ?>">Pemenang</li></a>
                </ul>
                <ul>
                    <li> <a href="logout.php">Logout</a> </li>
                </ul>
            </nav>
        </div>
        <div class="page-content">

            <div class="top-nav">
                <nav>
                    <div class="judul">
                        <h1>Dashboard</h1>
                        <p class="des">Welcome to Dashboard</p>
                    </div>
                    <div class=""></div>
                    <div class="profile">
                        <p><?php if (isset($_SESSION['user'])): ?>
                                <?php echo $_SESSION['user'] ?>
                            <?php else: ?>
                                Guest
                            <?php endif; ?>
                        </p>
                        <img src="./../assets/img/user.png" alt="">
                    </div>
                </nav>
            </div>

            <div class="content">
                <?php if (isset($_GET['page'])): ?>
                    <?php include $_GET['page'].".php" ?>
                <?php else: ?>
                    <div class="menu-card">
                        <div class="card">
                            <div class="title">User</div>
                            <p class="sub"><?php echo $user['jumlah'] ?></p>
                        </div>
                        <div class="card">
                            <div class="title">Lelang</div>
                            <p class="sub"><?php echo $lelang['jumlah'] ?></p>
                        </div>
                        <div class="card">
                            <div class="title">Profit</div>
                            <p class="sub">Rp 70.000</p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </section>



</body>
</html>
