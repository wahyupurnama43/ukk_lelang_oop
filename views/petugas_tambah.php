<?php
    if (isset($_POST['submit'])) {
        $p = new Petugas();
        $data = $p->addData();
        if ($data == true) {
            echo "<script>alert('Data Berhasil Terdaftar')</script>";
            header('Location: http://ukk-lelang.test/views/dashboard.php?page=petugas');
        }else{
            echo "<script>alert('Data Gagal Terdaftar')</script>";
        }
    }
?>

<div class="add_user">
    <h1>Tambah Data Petugas</h1>
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
            <input type="date" required name="tgl_lahir" >
        </div>
        <div class="form-group">
            <select class="" name="level" required>
                <option value="" selected disabled>Pilih Status</option>
                <option value="petugas">Petugas</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-login"  name="submit" value="Tambah Petugas" style="color:#fff">
        </div>
    </form>
    <div class="form-group">
        <a href="?page=user"><button class="btn btn-back">Back</button></a>
    </div>
</div>
