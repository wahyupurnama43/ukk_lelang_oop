<?php
    if (isset($_POST['submit'])) {
        $k = new Kategori();
        $data = $k->addData();

        if ($data == true) {
            echo "<script>alert('Data Berhasil Terdaftar')</script>";
            header('Location: http://ukk-lelang.test/views/dashboard.php?page=kategori');
        }else{
            echo "<script>alert('Data Gagal Terdaftar')</script>";
        }
    }
?>

<div class="add_user">
    <h1>Tambah Data User</h1>
    <form action="" method="POST">
        <div class="form-group">
            <input type="text" name="kategori" required placeholder="Nama Kategori">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-login"  name="submit" value="Tambah Kategori" style="color:#fff">
        </div>
    </form>
    <div class="form-group">
        <a href="?page=user"><button class="btn btn-back">Back</button></a>
    </div>
</div>
