<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nama Pengirim</label>
        <input type="text" name="pengirim" placeholder="Nama Pengirim" required>
            <br/>
        <label>Alamat Pengirim</label>
        <input type="text" name="alpengirim" placeholder="Alamat Pengirim"required>
            <br/>
        <label>Nama Penerima</label>
        <input type="text" name="penerima" placeholder="Nama Penerima"required>
            <br/>
        <label>Alamat Penerima</label>
        <input type="text" name="alpenerima" placeholder="Alamat Penerima"required>
            <br/>
        <input type="submit" name="kirim" value="Do It!">
    </form>
</body>
</html>
<?php
if(isset($_POST["kirim"])){
    $connect = new PDO("mysql:host=localhost;dbname=crud_db", "ichlas", "12345");
    $pengirim = $_POST["pengirim"];
    $alpengirim = $_POST["alpengirim"];
    $penerima = $_POST["penerima"];
    $alpenerima = $_POST["alpenerima"];
    $query = "INSERT INTO databar (pengirim, alpengirim, penerima, alpenerima) VALUES ('$pengirim', '$alpengirim', '$penerima', '$alpenerima')";
    $eks = $connect->prepare($query);
    $eks->execute();
    echo "Input data berhasil, yay!";
}
?>