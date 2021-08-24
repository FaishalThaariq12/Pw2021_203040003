<?php
/*
M. Faishal Thariqulhaq
203040003
https://github.com/FaishalThaariq12/pw2021_203040003
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post
*/
?>
<?php
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040003",
		"nama" => "Faishal Thariqulhaq",
		"email" => "isalthoriq12@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "isal.jpg"
	],
	[
		"nama" => "hanif shafwan", 
		"nrp" => "20304001",
		"email" => "hans@gmail.com",
		"jurusan" => "Teknik informatika",
		"gambar" => "hans.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>