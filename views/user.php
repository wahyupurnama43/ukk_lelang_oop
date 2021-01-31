<?php

    $u = new User();
    $users = $u->getUser();

?>

<div class="table">
    <a href="?page=user_tambah" class="btn btn-edit">Tambah User</a>
    <table>
        <thead>
            <tr>
                <th> No </th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $user['nama_lengkap'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?php if($user['is_admin'] == 1)  {echo 'Admin';}else if($user['is_admin'] == 2) {echo 'Petugas';} else{echo "Siswa";} ?></td>
                    <td width="20%">
                        <a href="?page=user_edit&id=<?= $user['id'] ?>" class="btn btn-edit">Edit</a>
                        <a href="?page=user_delete&id=<?= $user['id'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin Data di Hapus')" >Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
