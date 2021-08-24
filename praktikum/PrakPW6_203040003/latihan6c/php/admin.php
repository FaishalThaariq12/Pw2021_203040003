<?php

// Nama :M. Faishal Thariqulhaq
// NRP : 203040003
// Shift : Rabu pukul 09:00-10:00 WIB

?>

  
<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$novel = query("SELECT * FROM novel");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $novel = query("SELECT * FROM novel WHERE
            judul LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            sinopsis LIKE '%$keyword%' ");
} else {
    $novel = query("SELECT * FROM novel");
}
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
    <body class="con-admin">

	<ul class="navbar-nav mr-3">
        <a href="logout.php"><button class="btn">Log out</button></a>
      </ul>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>

<div class="container">
        <div class="add">
            <a href="tambah.php">Tambah Data</a>
        </div>
    </div>
    
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
        <?php if (empty($novel)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Buku Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($novel as $nv) : ?>
            <tr>
                <td>
                <a href="ubah.php?id=<?= $nv['id'] ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $nv ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td class="table-primary"><?= $nv["judul"]; ?></td>
                <td class="table-primary"><img src="../assets/img/<?= $nv['gambar']; ?>"></td>  
                <td><?= $nv["pengarang"]; ?></td>
                <td class="table-primary"><?= $nv["sinopsis"]; ?></td>
                <td class="table-primary"><?= $nv["harga"]; ?></td>
                 <td id="type"><span><?= $nv["kategori"]; ?></span></td>
        </tr>
        <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>