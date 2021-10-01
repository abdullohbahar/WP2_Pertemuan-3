<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Cinema</title>
</head>
<body>
    <h1><b>Pemesanan Tiket Cinema 99</b></h1>
<form action="<?= base_url('outputcinema') ?>" method="POST">
    <pre>
Nama Pemesanan : <input type="text" name="nama">

Judul Film     : <select name="judul" id="">
                    <option value="parasite">-- Pilih --</option>
                    <option value="parasite">Parasite</option>
                    <option value="Hereditary">Hereditary</option>
                    <option value="The Colset">The Colset</option>
                    <option value="The Kamen Raider Reiwa">The Kamen Raider Reiwa</option>
                 </select>

Pukul          : <input type="radio" name="pukul" value="14.20" id=""> 14.20 <input type="radio" name="pukul" value="15.40" id=""> 15.40 <input type="radio" name="pukul" value="16.40" id=""> 16.40
                 
Tipe Studio    : <input type="radio" name="tipe" value="Reguler 2D" id="">Reguler 2D <input type="radio" name="tipe" value="3D" id=""> 3D <input type="radio" name="tipe" value="Velvet" id=""> Velvet

Jumlah Pesan   : <input type="text" name="jumlah">

                <button type="submit">Hitung</button> <button type="reset">Batal</button>
</pre>
</form>
</body>
</html>