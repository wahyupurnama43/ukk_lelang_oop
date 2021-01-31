<?php
$id = $_GET['id'];

$u = new User();
$delete = $u->delete($id);

if ($delete == true) {
    echo "
    <script>
        alert('Data Berhasil Di Update')
    </script>";
    header('Location: http://ukk-lelang.test/views/dashboard.php?page=user');
}else{
    echo "
    <script>
        alert('Data Gagal Di Update')
    </script>";
    header('Location: http://ukk-lelang.test/views/dashboard.php?page=user');
}
