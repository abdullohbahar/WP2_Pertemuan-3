<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Cinema</title>
</head>
<body>
    <h1><b>Pemesanan Tiket Cinema 99</b></h1>
    <pre>
        Nama Pemesan    : <?= $nama ?> <br>
        Judul Film      : <?= $judul ?> <br>
        Pukul           : <?= $pukul ?> WIB <br>
        Tipe Studio     : <?= $tipe ?> <br>
        Jumlah Pesan    : <?= $jumlah ?> <br>
        Harga Tiket     : <?= $harga ?> <br>
        total           : <?= $total ?> <br>

            <a href="<?= base_url('') ?>">Input Data Lagi</a>
    </pre>
</body>
</html>