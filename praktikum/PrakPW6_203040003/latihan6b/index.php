<?php

// Nama :M. Faishal Thariqulhaq
// NRP : 203040003
// Shift : Rabu pukul 09:00-10:00 WIB

?>

  
<?php 
require 'php/functions.php';
$novel = query("SELECT * FROM novel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="table-primary"></div>
            <?php foreach ($novel as $nv) :?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $nv['id'] ?>">
                        <?= $nv["pengarang"]?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <button class="tombol-admin"><a href="php/login.php">Halaman Admin</a></button>
    </div>
    </div>
</body>
</html>