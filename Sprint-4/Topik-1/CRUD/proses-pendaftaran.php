<?php
include("config.php");

if(isset($_POST['daftar'])){

    $pengirim = $_POST['pengirim'];
    $alpengirim = $_POST['alpengirim'];
    $penerima = $_POST['penerima'];
    $alpenerima = $_POST['alpenerima'];

    $query = "INSERT INTO databar (pengirim, alpengirim, penerima, alpenerima) VALUES ('$pengirim', '$alpengirim', '$penerima', '$alpenerima')";
    $exe = $db->prepare($query);
    $exe->execute();

    if ($exe){
        header('location: index.php?status=sukses');
    }else {
        header('location: index.php?status=gagal');
    }

}else{
    die("Akses dilarang...");
}

?>