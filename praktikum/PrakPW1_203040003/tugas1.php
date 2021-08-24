<!-- 
    Nama :M. Faishal Thariqulhaq
    NRP : 20304003
    Shift : Rabu pukul 09:00-10:00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>
    <style>
        .kotak{
            width: 70px;
            height: 70px;
            display: inline-block;
            border: 3px solid black;
        }
        .biru{
            background-color: lightblue;
        }
        .salmon{
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($kolom=1; $kolom<=6; $kolom++) : 
        for ($baris=1; $baris<=6; $baris++) : 

            if($kolom%2==!0) :
                if($baris%2==!0) : ?>
                    <div class="kotak biru"></div>
                <?php else: ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

            <?php else: 
                if($baris%2==!0) : ?>
                    <div class="kotak salmon"></div>
                <?php else: ?>
                    <div class="kotak biru"></div>
                <?php endif; ?>    
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    </body>
</html>