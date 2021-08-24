<?php
/*
M. Faishal Thariqulhaq
203040003
https://github.com/FaishalThaariq12/pw2021_203040003
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai Array
*/
?>
<?php 
$mahasiswa = [
	["M Faishal Thariqulhaq", "203040003", "Teknik Informatika", "isalthoriq12@gmail.com"],
	[" ali syakir", "203040001", "Teknik Mesin", "alisyakir@gmail.com"],
	["hans", "203040002", "Teknik Pangan", "hans@gmail.com"]
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
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>