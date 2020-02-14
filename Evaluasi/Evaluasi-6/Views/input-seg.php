<?php
session_start();
require_once("../Controls/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <center><title>Menghitung Segitiga</title>
    <h3>Aplikasi Menghitung Bidang Datar Segitiga</h3></center>
    <br/>
    <style>
    .input{
        border: 2px solid #c8c8c8;
        border-radius: 7.5px;
        width: 450px;
        height: 150px;
        display: block;
    }
    </style>
</head>
<body>
    <center><form action="" method="POST">
        <div class="input">
        <label>Masukkan Tinggi</label>
        <br/>
        <input type="number" name="tinggi" placeholder="Masukkan tinggi segitiga" />
        <br/>
        <label>Masukkan Alas</label>
        <br/>
        <input type="number" name="alas" placeholder="Masukkan alas segitiga" />
        <br/>
        <input type="submit" name="hitung" value="Hitung!" />
        <br/>
        <a href="timeline.php">Klik disini jika ingin kembali ke beranda</a>
        </div>
    </form></center>
</body>
</html>

<?php

$tinggi = $_POST['tinggi'];
$alas = $_POST['alas'];
require_once __DIR__ . '/../vendor/autoload.php';
use Bangundatar\Segitiga as Segitiga;

if(isset($_POST['hitung'])){
    $eks = new Segitiga();
    echo "<center>";
    $eks->hitung($alas, $tinggi);
    echo "</center>";
}

?>