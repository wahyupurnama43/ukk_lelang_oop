<?php

    $k = new Kategori();
    $kategori = $k->getKategori();
?>

<div class="table">
    <a href="?page=kategori_tambah" class="btn btn-edit">Tambah Kategori</a>
    <table>
        <thead>
            <tr>
                <th> No </th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($kategori as $kategori): ?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $kategori['name_kategori'] ?></td>
                    <td width="20%">
                        <a href="?page=kategori_edit&id=<?= $kategori['id'] ?>" class="btn btn-edit">Edit</a>
                        <a href="?page=kategori_delete&id=<?= $kategori['id'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin Data di Hapus')" >Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
