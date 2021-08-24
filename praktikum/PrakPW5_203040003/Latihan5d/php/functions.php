<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prakpw_tubes_203040003");

    return $conn;
}

function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO novel
                    VALUES
                    ('', '$judul', '$gambar', '$pengarang', '$sinopsis', '$harga', '$kategori')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) 
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM novel WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "UPDATE novel 
                    SET 
                    judul='$judul',
                    gambar='$gambar',
                    pengarang='$pengarang',
                    sinopsis='$sinopsis' 
                    harga='$harga',
                    kategori='$kategori',
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>