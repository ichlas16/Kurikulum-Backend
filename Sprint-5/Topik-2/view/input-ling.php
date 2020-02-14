<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <center><title>Menghitung Lingkaran</title>
    <h3>Aplikasi Menghitung Bidang Datar Lingkaran</h3></center>
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
    <label>Masukkan jari-jari lingkaran</label>
    <br/>
    <input type="number" name="jari" placeholder="Masukkan jari-jari lingkaran" />
    <input type="submit" name="hitung" value="Hitung!" />
    <br/>
    <a href="../index.php">Klik disini jika ingin kembali ke beranda</a>
    </form></center>
    </div>
</body>
</html>

<?php

$jari = $_POST['jari'];
require_once __DIR__ . '/../vendor/autoload.php';
use Bangundatar\Lingkaran;

if(isset($_POST['hitung'])){

    $eks = new Lingkaran();
    echo "<center>";
    $eks->hitung($jari);
    echo "</center>";
}

?>