<?php 
    //array multidimensi/ array didalam array/ array bersarang 
$mahasiswa =[
    ["Bagus", "22520014", "Teknologi Informasi", "bagus_22520014@stimata.ac.id"],
    ["Prasetyo", "22510014", "Sistem Informasi", "prasetyo_22510014@stimata.ac.id"],
    ["Wardana", "21520014", "Teknologi Informasi", "warfana_21520014@stimata.ac.id"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $m) : ?>
        <li><?php echo $m; ?></li>
            <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>