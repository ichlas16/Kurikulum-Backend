<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Catatan Pengiriman</title>
</head>
<body>
    <h1>Aplikasi Input Barang</h1>
    <form method="POST" action="">
        <div>
            <h4>Masukkan aplikasi di bawah untuk menginput data pengiriman barang</h4>
            <br/>
        </div>
            <label>Masukkan Nama Pengirim</label>
            <input name="pengirim" placeholder="Nama Pengirim" required>
            <br/>
            <label>Masukkan Alamat Pengirim</label>
            <input name="alpengirim" placeholder="Alamat Pengirim" required>
            <br/>
            <label>Masukkan Nama Penerima</label>
            <input name="penerima" placeholder="Nama Penerima" required>
            <br/>
            <label>Masukkan Alamat Penerima</label>
            <input name="alpenerima" placeholder="Alamat Penerima" required>
            <br/>
            <input type="submit" name="submit" value="Done!">
    </form>
</body>
</html>

<?php

// echo "Input data berhasil, yay!";
if (isset($_POST["submit"])){
    $pengirim = $_POST["pengirim"];
    $alpengirim = $_POST["alpengirim"];
    $penerima = $_POST["penerima"];
    $alpenerima = $_POST["alpenerima"];
    
    $connect = new PDO("mysql:host=localhost;dbname=crud_db", 'ichlas', '12345');
    $query = "INSERT INTO databar (pengirim, alpengirim, penerima, alpenerima) VALUES ('$pengirim', '$alpengirim', '$penerima', '$alpenerima')";
    $eks = $connect->prepare($query);
    $eks->execute();
    
    echo "Input data berhasil, yay!";
die;
}
?>