<?php
$game = [
    [
        "judul" => "God of War",
        "release" => "April 20, 2018",
        "tahun" => "2018",
        "gambar" => "18.jpg"
    ],

    [
        "judul" => "Sekiro: Shadows Die Twice",
        "release" => "March 22, 2019",
        "tahun" => "2019",
        "gambar" => "19.jpg"
    ],

    [
        "judul" => "The Last of Us Part II",
        "release" => "June 19, 2020",
        "tahun" => "2020",
        "gambar" => ""
    ],

    [
        "judul" => "It Takes Two",
        "release" => "March 25, 2021",
        "tahun" => "2021",
        "gambar" => "21.jpg"
    ],

    [
        "judul" => "Elden Ring",
        "release" => "February 25, 2022",
        "tahun" => "2022",
        "gambar" => "22.jpg"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Dafta Pemenang Game of the Year (2018 - 2022)</h1>
    <ul>
        <?php foreach ($game as $goty) : ?>
            <li>
                <a href="latihan2.php?judul<?= $goty["judul"]; ?>&release= <?= $goty["release"]; ?>&tahun= <?= $goty["tahun"]; ?>&gambar=<?= $goty["gambar"]; ?> "><?= $goty["judul"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>