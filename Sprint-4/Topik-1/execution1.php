<?php
if (isset($_POST['submit1'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    echo "Nama Pengirim = ".$nama."<br/>";
    echo "Harga Barang = ".$harga."<br/>";
}
?>