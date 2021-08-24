<?php 
// Nama :M. Faishal Thariqulhaq
// NRP : 203040003
// Shift : Rabu pukul 09:00-10:00 WIB
?>

<?php 
$buku = [
    [
        "nama" => "What's so wrong about your life",
        "gambar" => "1.jpg",
        "pengarang" => "Ardhi Mohammad",
        "sinopsis" => "membahas tentang kesalahan-kesalahan yang sering kita lakukan dalam menghadapi suatu hal. Mulai dari masalah cinta, kebahagiaan, pencapaian dalam hidup atau cara kita menghadapi suatu masalah",
        "harga" => 84000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "JIka Kita Tak Pernah Jatuh cinta",
        "gambar" => "02.jpg",
        "pengarang" => "Alvi Syahrin",
        "sinopsis" => "tentang sebuah bentuk segala permasalahan tentang cinta. Mengajarkan kita untuk tidak payah hingga mengorbankan banyak hal demi cinta",
        "harga" => 74000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "JIka Kita Tak Pernah Baik Baik Saja",
        "gambar" => "03.jpg",
        "pengarang" => "Alvi Syahrin",
        "sinopsis" => "Mengatasi kekecewaan hidup",
        "harga" => 74000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Tumbuh Dari Luka",
        "gambar" => "04.jpg",
        "pengarang" => "Indra Sugiarto",
        "sinopsis" => "Novel ini untuk para pejuang yang ingin memilih tumbuh atas hancur dari luka ",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Book of Introvert",
        "gambar" => "05.jpg",
        "pengarang" => "Sutrisno",
        "sinopsis" => "Novel Book of Introvert berisi tentang bagaimana kita bisa tetap istimewa dengan kepribadian introvert",
        "harga" => 50000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Duduk Dulu",
        "gambar" => "06.jpg",
        "pengarang" => "Andrea Hirata",
        "sinopsis" => "novel ini menjelaskan tentang jiwa manusia dalam amarah, kesedihan, kecemasan, hingga kesepian",
        "harga" => 83000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Tentang Semua Yang Ada diBumi",
        "gambar" => "07.jpg",
        "pengarang" => "aesteuticc",
        "sinopsis" => "Manusia sungguh makhluk yang lucu. Bisa merasa takut kehilangan pada yang belum benar-benar miliknya.",
        "harga" => 77000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Sabtu Bersama Bapak",
        "gambar" => "08.jpg",
        "pengarang" => "Aditya Mulya",
        "sinopsis"=> "Berawal dari keluarga kecil seorang ayah bernama Gunawan Garnida yang divonis sakit. Ia sadar, masih panjang perjalanan hidup kedua anaknya, yang kala itu masih kecil, dan masih butuh pemdampingan serta nasihat-nasihat serta nilai-nilai kehidupan dari seorang ayah.",
        "harga" => 45000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Tak Mungkin Membuat Semua Orang Senang ",
        "gambar" => "09.jpg",
        "pengarang" => "Jeong Moon Jeong",
        "sinopsis"=> "Buku ini semacam curhatan Moon-jeong tentang bagaimana seharusnya menjalin hubungan antarmanusia. Karena bentuknya curhat, buku ini didominasi oleh pemikiran-pemikiran Moon-jeong sendiri",
        "harga" => 69000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Buku Ini Untuk Kamu",
        "gambar" => "10.jpg",
        "pengarang" => "Menjadi Manusia",
        "sinopsis" => "Kumpulan surat-surat yang dikurasi dari ribuan surat lainnya, yang belum sempat tersampaikan. Semoga dapat mewakili perasaan banyak orang. Kami percaya, ketika suara tidak mampu mengutarakan, tulisan adalah cara yang tepat untuk meluapkan perasaan.",
        "harga" => 92000,
        "kategori" => "Novel"
    ],
]
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Buku Kehidupan</title>
    </head>
    <body>
        <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
        <thead>
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
        <?php foreach($buku as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td><?= $b["nama"]; ?></td>
            <td>
                <img src="img/<?= $b["gambar"]; ?>">
            </td>
            <td><?= $b["pengarang"]; ?></td>
            <td><?= $b["sinopsis"]; ?></td>
            <td><?= $b["harga"]; ?></td>
            <td><?= $b["kategori"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>