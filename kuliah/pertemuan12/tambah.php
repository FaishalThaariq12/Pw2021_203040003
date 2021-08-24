<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

// cek tombol sudah ditekan atau belum
if (isset($_POST['tambah']) > 0) {
  if (tambah($_POST)) {
    echo "<script>
                alert('data berhasilkan ditambahkan');
                document.location.href = 'latihan3.php';
                </script>";
  } else {
    echo "<script>
                alert('data gagal ditambahkan');
                </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h3>Tambah Data</h3>

  <form action="" method="post">
    <ul>
      <li>
        <label for="nama">Nama : <input type="text" name="nama" autofocus required></label>
      </li>
      <li>
        <label for="email">Email : <input type="text" name="email" required></label>
      </li>
      <li>
        <label for="universitas">Universitas : <input type="text" name="universitas" required></label>
      </li>
      <li>
        <label for="foto">Gambar : <input type="text" name="foto" required></label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>
</body>

</html>