<!-- 
    Nama :M. Faishal Thariqulhaq
    NRP : 20304003
    Shift : Rabu pukul 09:00-10:00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1c</title>
    <style>
        h3{
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 100%;
            border: 2px solid black;
            margin: 0px 5px 10px 0px;
        }
    </style>
</head>
<body>
    <?php for ($i=1; $i<=3; $i++) : ?>
        <?php for ($x=1; $x<=$i; $x++) : ?>
            <h3><?= $i ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    </body>
</html>