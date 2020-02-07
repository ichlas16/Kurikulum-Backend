<?php

// echo "Input data berhasil, yay!";
if (isset($_POST["submit"])){
    $pengirim = $_POST["pengirim"];
    $alpengirim = $_POST["alpengirim"];
    $penerima = $_POST["penerima"];
    $alpenerima = $_POST["alpenerima"];
    
    $connect = new PDO("mysql:host=localhost;dbname=crud_db", 'ichlas', '12345');
    $query = "SELECT * FROM databar";
    $eks = $connect->prepare($query);
    $eks->execute();
    $hasil = $eks->fetchALL(pdo::FETCH_ASSOC);
    print_r($hasil);
die;
}
?>