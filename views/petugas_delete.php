<?php
$id = $_GET['id'];

$u = new Petugas();
$delete = $u->delete($id);

if ($delete == true) {
    header('Location: http://ukk-lelang.test/views/dashboard.php?page=petugas');
}else{
    header('Location: http://ukk-lelang.test/views/dashboard.php?page=petugas');
}
