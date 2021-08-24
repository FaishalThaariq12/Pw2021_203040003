<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $novel = query("SELECT * FROM novel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
    <style>
    .table {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
        img {
            max-width: 150px;
        }
    </style>

    <title>Buku kehidupan</title>
</head>
<body>
        
    
    <div class="container">
       <div class="gambar">
            <img src="../assets/img/<?= $novel["gambar"]; ?>" alt="">
       </div>
       <div class="keterangan">
           <p class="table-primary"><?= $novel["judul"]; ?></p>
           <p class="table-primary"><?= $novel["pengarang"]; ?></p>
           <p class="table-primary"><?= $novel["harga"]; ?></p>
           <p class="table-primary"><?= $novel["kategori"]; ?></p>
           <p class="table-primary"><?= $novel["sinopsis"]; ?></p>
       </div>

       <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>