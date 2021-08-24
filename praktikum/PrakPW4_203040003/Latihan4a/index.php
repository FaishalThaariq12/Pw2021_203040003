<?php

// Nama :M. Faishal Thariqulhaq
// NRP : 203040003
// Shift : Rabu pukul 09:00-10:00 WIB

?>

<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "prakpw_tubes_203040003");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM novel");

?>

<!Doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/style2.css">
        <title>Buku kehidupan</title>
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
            while ($row = mysqli_fetch_assoc($result)) :
            ?>
                <tr>
            <td><?= $i; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><img src="assets/img/<?= $row["gambar"];?> "></td>
            <td><?= $row["pengarang"]; ?></td>
            <td><?= $row["sinopsis"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["kategori"];?> </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>