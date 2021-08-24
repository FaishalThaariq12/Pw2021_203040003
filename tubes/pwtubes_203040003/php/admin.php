<?php

session_start();

if (!isset($_SESSION["username"])) {
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <title>Buku kehidupan</title>
    <style>

    </style>
</head>

<body class="con-admin">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Kang Novel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="detail.php"><i class="fas fa-mobile-alt mr-2"></i>detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah.php"><i class="fas fa-th-list mr-2"></i> tambah Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar akhir -->

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
                                <a href="hapus.php?id=<?= $nv['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
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