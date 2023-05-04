<?php

require "funcions.php";

$id = $_GET["id"];
var_dump($id);

$game = query("SELECT * FROM data_game WHERE id = $id");


if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('Data Gagal Diubah');
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
    <title>Halaman Ubah Data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <form action="" method="POST">
        <input type="hide" name="id" velue="<?= $game["judul"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required velue="<?= $game["judul"]; ?>">
            </li>
            <li>
                <label for="release_date">release_date :</label>
                <input type="text" name="release_date" id="release_date" required velue="<?= $game["release_date"]; ?>">
            </li>
            <li>
                <label for="tahun_menang">tahun_menang :</label>
                <input type="text" name="tahun_menang" id="tahun_menang" required velue="<?= $game["tahun_menang"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required velue="<?= $game["gambar"]; ?>">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>

    </form>
</body>

</html>