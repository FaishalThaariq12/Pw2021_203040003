<!-- 
Nama : Faishal Thariqulhaq
NRP : 203040003
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
    <style>
    section {
        min-height: 420px;
    }

    h1 {
        text-align: center;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }
    </style>

    <title>Buku kehidupan</title>
</head>
<body>
    <div class="container">

        <h3>Form ubah Data Buku</h3>

        <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $novel['id']; ?>">
            <ul>
                <li>
                    <label for="judul">Judul :</label><br>
                    <input type="text" name="judul" id="judul" required><br><br>
                </li>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" ><br><br>
                </li>
                <li>
                    <label for="pengarang">Pengarang :</label><br>
                    <input type="text" name="pengarang" id="nama" required><br><br>
                </li>
                <li>
                    <label for="sinopsis">sinopsis :</label><br>
                    <input type="text" name="sinopsis" id="sinopsis" required><br><br>
                </li>
                <li>
                    <label for="harga">harga :</label><br>
                    <input type="text" name="harga" id="nama" required><br><br>
                </li>
                <li>
                    <label for="kategori">kategori :</label><br>
                    <input type="text" name="kategori" id="nama" required><br><br>
                </li>
                <br>
                <button type="submit" name="ubah">ubah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>

</body>
</html>