<!-- 
Nama : Faishal Thariqulhaq
NRP : 203040003
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;

?>