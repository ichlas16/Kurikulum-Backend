<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];
$tambah = $_POST["+"];
$kurang = $_POST["-"];
$kali = $_POST["*"];
$bagi = $_POST["/"];
$kirim = $_POST["kirim"]

if (isset ($kirim)){
    if ($angka1.$tambah.$angka2){
        var_dump($angka1.$tambah.$angka2);
    }if ($angka1.$kurang.$angka2){
        var_dump($angka1.$kurang.$angka2);
    }if ($angka1.$kali.$angka2){
        var_dump($angka1.$kali.$angka2);
    }if ($angka1.$bagi.$angka2){
        var_dump($angka1.$bagi.$angka2);
    }
}else(unset ($kirim)){

}
?>