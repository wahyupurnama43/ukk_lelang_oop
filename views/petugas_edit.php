<?php
    $id = $_GET['id'];
    $p = new Petugas();
    $data = $p->getId($id);

    if (isset($_POST['submit'])) {
        $update = $p->update();
        if ($update == true) {
            header('Location: http://ukk-lelang.test/views/dashboard.php?page=petugas');
        }else{
            echo "<script>
                alert('Data Gagal Di Update')
            </script>";
        }
    }
?>

<div class="add_user">
    <h1>Tambah Data User</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <div class="form-group">
            <input type="text" name="nama_lengkap" required placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap'] ?>">
        </div>
        <div class="form-group">
            <input type="email" name="email" required placeholder="email" value="<?php echo $data['email'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="username" required placeholder="Username" value="<?php echo $data['username'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="telpon" required placeholder="No telpon" value="<?php echo $data['telpon'] ?>">
        </div>
        <div class="form-group">
            <textarea name="alamat" required placeholder="Alamat"><?php echo $data['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <input type="date" required name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
        </div>
        <div class="form-group">
            <select class="" name="level" required>
                <option value=""  disabled>Pilih Status</option>
                <option value="petugas" <?= ($data['level'] == 'petugas') ? 'selected' : ''  ?>>Petugas</option>
                <option value="admin" <?= ($data['level'] == 'admin') ? 'selected' : ''  ?>>Admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-login"  name="submit" value="Edit User" style="color:#fff">
        </div>

    </form>
    <div class="form-group">
        <a href="?page=user"><button class="btn btn-back">Back</button></a>
    </div>
</div>
