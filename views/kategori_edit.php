<?php
    $k = new Kategori();

    $id = $_GET['id'];
    $data = $k->getId($id);
    if (isset($_POST['submit'])) {
        $data = $k->update();

        if ($data == true) {
            header('Location: http://ukk-lelang.test/views/dashboard.php?page=kategori');
        }else{
            echo "<script>alert('Data Gagal Terdaftar')</script>";
        }
    }
?>

<div class="add_user">
    <h1>Tambah Data User</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <div class="form-group">
            <input type="text" name="kategori" required placeholder="Nama Kategori" value="<?php echo $data['name_kategori'] ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-login"  name="submit" value="Edit Kategori" style="color:#fff">
        </div>
    </form>
    <div class="form-group">
        <a href="?page=user"><button class="btn btn-back">Back</button></a>
    </div>
</div>
