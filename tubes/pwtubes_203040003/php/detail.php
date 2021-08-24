<?php

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

// query berdasarkan id
$n = query("SELECT * FROM novel WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Buku kehidupan</title>
</head>

<body>
    <h3>Detail novel</h3>
    <ul>
        <li><img src="/pwtubes_203040003/assets/img/<? $n['gambar']; ?>" alt="" style="height:150px;"></li>
        <li>judul : <?= $n['judul']; ?></li>
        <li>gambar : <?= $n['gambar']; ?></li>
        <li>harga : <?= $n['harga']; ?></li>
        <li>kategori : <?= $n['kategori']; ?></li>
        <li><a href="index.php">kembali kedaftar novel</a></li>
    </ul>
</body>

</html>