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

  mysqli_query($conn, "DELETE FROM survey_corps WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data){
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

function cari($keyword){
  $conn = koneksi();

  $query = "SELECT * FROM survey_corps
              WHERE 
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              pangkat LIKE '%$keyword%'";
  
  $result = mysqli_query($conn, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
  }
  
  return $rows;
}
