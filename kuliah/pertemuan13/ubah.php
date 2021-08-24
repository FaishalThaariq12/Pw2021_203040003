<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

// jika tidak id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// cari data berdasarkan id
$p = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek tombol sudah ditekan atau belum
if (isset($_POST['ubah']) > 0) {
  if (ubah($_POST)) {
    echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
                </script>";
  } else {
    echo "<script>
                alert('data gagal diubah');
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
  <title>Ubah Data</title>
</head>

<body>
  <h3>From Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
      <li>
        <label>
          Email
          <input type="text" name="email" required value="<?= $m['email']; ?>">>
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">>
        </label>
      </li>
      <li>
        <label>
          Universitas:
          <input type="text" name="universitas" required value="<?= $m['universitas']; ?>">>
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">>
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
      </li>


    </ul>


  </form>

</body>

</html>