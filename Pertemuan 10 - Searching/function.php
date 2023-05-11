<?php
$koneksi = mysqli_connect("localhost", "root", "", "dafta pemenang game of the year (2018 - 2022)");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $judul = htmlspecialchars($data["judul"]);
    $release_date = htmlspecialchars($data["release_date"]);
    $tahun_menang  = htmlspecialchars($data["tahun_menang"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert ke database
    $query = "INSERT INTO data_game
            VALUES
            ('','$judul','$release_date','$tahun_menang','$gambar')
            ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_game WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $release_date = htmlspecialchars($data["release_date"]);
    $tahun_menang  = htmlspecialchars($data["tahun_menang"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert ke database
    $query = "UPDATE data_game SET
        judul = '$judul',
        release_date = '$release_date',
        tahun_menang = '$tahun_menang',
        gambar = ''$gambar
        WHERE id = $id
    ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM data_game 
            WHERE
            judul LIKE '$keyword' OR
            tahun_menang LIKE '$keyword'
            ";

    return query($query);
}
