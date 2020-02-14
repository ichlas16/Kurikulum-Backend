<?php

include('../Controls/config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM login WHERE id=$id";
    $hapus = $db->prepare($query);
    $hapus->execute();

    if ($hapus){
        header('location: timeline.php?index=berhasil');
    }else{
        die("gagal menghapus...");
    }

}else{
    die("akses dilarang...");
}

?>