<?php

include('config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM databar WHERE id=$id";
    $hapus = $db->prepare($query);
    $hapus->execute();

    if ($hapus){
        header('location: list-barang.php');
    }else{
        die("gagal menghapus...");
    }

}else{
    die("akses dilarang...");
}

?>