<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "pw_203040003");
  mysqli_select_db($conn, "mahasiswa");

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  // jika data hanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $universitas = htmlspecialchars($data['univ']);

  $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$gambar','$nama','$email','$universitas');
                    ";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar = htmlspecialchars($data['foto']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $universitas = htmlspecialchars($data['universitas']);

  $query = "UPDATE mahasiswa SET
              foto ='$gambar',
              nama ='$nama',
              email ='$email',
              universitas ='$universitas',
              WHERE id = $id ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              universitas LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => "username / password salah"
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // Jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username atau Password Tidak Boleh Kososng!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username dan password sudah sesuai
  // Enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // Insert ke Tabel
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
