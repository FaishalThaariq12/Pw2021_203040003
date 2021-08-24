<?php

// Nama :M. Faishal Thariqulhaq
// NRP : 203040003
// Shift : Rabu pukul 09:00-10:00 WIB

?>

  
<?php

// Menghubungkan dengan file php lainya 
require 'php/functions.php';

//melakukan query biasa ke table hijab
$novel = query("SELECT * FROM novel");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku kehidupan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
    </head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1;
            foreach ($novel as $nv) : ?>
                <tr>
                <td class="table-succes"><?= $i; ?></td>
                <td class="table-primary"><?= $nv["judul"]; ?></td>
                <td><img src="assets/img/<?= $nv["gambar"]; ?>"></td>  
                <td><?= $nv["pengarang"]; ?></td>
                <td class="table-primary"><?= $nv["sinopsis"]; ?></td>
                <td class="table-primary"><?= $nv["harga"]; ?></td>
                 <td id="type"><span><?= $nv["kategori"]; ?></span></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>