
<!-- 
    Nama :M. Faishal Thariqulhaq
    NRP : 20304003
    Shift : Rabu pukul 09:00-10:00 WIB
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i=1; $i<=5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>

        </tr>
        <!-- Tambahkan Baris Kode PHP Untuk Menampilkan Body Table -->
        <?php for ($i=1; $i<=5; $i++) : ?>
        <tr>
            <th>Baris <?= $i; ?></th>
            <?php for ($z=1; $z<=5; $z++) : ?>
                <td>Baris <?= $i ?>, Kolom <?= $z; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>