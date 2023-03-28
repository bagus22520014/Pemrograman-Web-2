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
