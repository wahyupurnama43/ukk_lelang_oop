<?php

$id = $_GET['id'];

$k = new Kategori();
$delete = $k->delete($id);

if ($delete == true) {
    header('Location: http://ukk-lelang.test/views/dashboard.php?page=kategori');
}else{
    header('Location:  http://ukk-lelang.test/views/dashboard.php?page=kategori');
}
