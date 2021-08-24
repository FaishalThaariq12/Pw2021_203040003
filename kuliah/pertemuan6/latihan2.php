<?php
/*
M. Faishal Thariqulhaq
203040003
https://github.com/FaishalThaariq12/pw2021_203040003
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai Array Associative
*/
?>
<?php
// $mahasiswa = [
// 	["M Faishal Thariqulhaq", "203040003", "Teknik Informatika", "isalthoriq12@gmail.com"],
// 	[" ali syakir", "203040001", "Teknik Mesin", "alisyakir@gmail.com"],
// 	["hans", "203040002", "Teknik Pangan", "hans@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "M Faishal Thariqulhaq", 
    "nrp" => "203040003",
    "email" => "Isalthoriq12@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "isal.JPG"
    ],
    [
        "nama" => "Hans julio", 
        "nrp" => "20304002",
        "email" => "Hans@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "hans.JPG"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["jurusan"]; ?></li>
			<li>Jurusan  : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html> 