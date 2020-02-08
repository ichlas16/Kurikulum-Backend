<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $pengirim = $_POST['pengirim'];
    $alpengirim = $_POST['alpengirim'];
    $penerima = $_POST['penerima'];
    $alpenerima = $_POST['alpenerima'];

    $query = "UPDATE databar SET pengirim='$pengirim' alpengirim='$alpengirim' penerima='$penerima' alpenerima='$alpenerima' WHERE id='$id'";
    $pedit = $db->prepare($query);
    $pedit->execute();

    if($pedit) {
            header('location: list-siswa.php');
    }else{
        die("gagal menyimpan perubahan...");
    }

}else{
    die("Akses dilarang...");
}

?>