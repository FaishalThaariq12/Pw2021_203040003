<?php
/*
M. Faishal Thariqulhaq
203040003
https://github.com/FaishalThaariq12/pw2021_203040003
Pertemuan 2 - 11 Februarari 2021
Mempelajari mengenai Sintaks Dasar PHP
*/
?>

<?php      //syntax php
          //standar outpot
          //echo, print, print_r
          //var_dump(debugging)
          //echo bisa pake kutip 1 atau 2


            echo"M Faishal Thariqulhaq <br>";
            print "M Faishal Thariqulhaq<br>";
            print_r ("M Faishal Thariqulhaq <br>");
            var_dump("M Faishal Thariqulhaq");''
//variable 
//variable dan tipe data
//tidak boleh diawal dengan angka, tapi mengandung angka

$nama = "Isal";
echo "namanya $nama";

//operator 
//artimatika
              $x = 20;
              $y = 30;
              echo $x * $y;

//penggabung string / concetanion /concats
$nama_depan = "Isal"
$nama_belakang = "Thariq"
echo $nama_depan . $nama_belakang; //menggabungkan tanpa ada spasi
echo $nama_depan . " " . $nama_belakang; //menggabungkan ada spasi

//assigment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;

//dalam variable
$nama = "Isal";
$nama . = "Thariq";
$nama . = "Haq";

//perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1"); //hasilnya true

//identitas
// ===, !==
var_dump(1 == "1")

//logika
// && > dan , || > or, ! > not
$x = 10;
var_dump($x <2 && $x %2 == 0); //hasilnya true
$x= 30;
var_dump($x < 20 && $x %2 == 0); //hasilnya false karena yg bener cuman salah satu
$x = 30;
var_dump($x < 20 || $x %2 == 0); //hasilnya true karena ada slaah satu yg benar
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>

  <body>


      <h1>Selamat Datang <?php echo "M Faishal Thariqulhaq"; ?></h1> <!-- contoh php di dalam html-->
      <p><?php echo "Isal" ?></p> <!--contoh php di dlaam html (2)-->


  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>

     <?php 
      echo "<h1>M Faishal Thariqulhaq</h1>" //contoh html didalam php
     ?>


  </body>
</html 