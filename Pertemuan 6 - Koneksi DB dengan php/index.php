<?php
require 'funcions.php';
$game = query("SELECT * FROM data_game");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar game </h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>release_date</th>
            <th>tahun_menang</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($game as $row) : ?>

            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="<?= $row['gambar'] ?>" width="100"></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['release_date'] ?></td>
                <td><?= $row['tahun_menang'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>