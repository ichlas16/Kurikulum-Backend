<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <center><title>Menghitung Persegi</title>
    <h3>Aplikasi Menghitung Bidang Datar Persegi</h3></center>
    <br/>
    <style>
    .input{
        border: 2px solid #c8c8c8;
        border-radius: 7.5px;
        width: 450px;
        height: 100px;
        display: block;
    }
    </style>
</head>
<body>
    <center><form action="" method="POST">
        <div class="input">
            <label>Masukkan sisi persegi</label>
            <br/>
            <input type="number" name="sisi" placeholder="Masukkan sisi persegi" />
            <input type="submit" name="hitung" value="Hitung!" />
            <br/>
            <a href="../index.php">Klik disini jika ingin kembali ke beranda</a>
        </div>
    </form></center>
</body>
</html>

<?php

$sisi = $_POST['sisi'];

if(isset($_POST['hitung'])){
    require_once('enter/autoloader.php');
    $eks = new Persegi();
    echo "<center>";
    $eks->hitung($sisi);
    echo "</center>";
}

?>