<?php 
include 'database.php';
$db = new Database();

$aksi = $_POST['aksi'];
    if($aksi == "tambah"){
        $db->create($_POST['nama'],$_POST['umur'],$_POST['asal']);
        header("location: show.php");
    }elseif($aksi == "hapus"){ 	
        $db->delete($_GET['id']);
        header("location: show.php");
    }elseif($aksi == "update"){
        $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
        header("location: show.php");
    }
?>