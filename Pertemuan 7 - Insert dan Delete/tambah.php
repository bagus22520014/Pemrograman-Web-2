<?php

require "funcions.php";

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('Data Gagal Disimpan');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="release_date">release_date :</label>
                <input type="text" name="release_date" id="release_date" required>
            </li>
            <li>
                <label for="tahun_menang">tahun_menang :</label>
                <input type="text" name="tahun_menang" id="tahun_menang" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>

        </ul>

    </form>
</body>

</html>