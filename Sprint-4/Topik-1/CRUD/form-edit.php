<?php

include("config.php");

if(!isset($_GET['id'])){
    header('location: list-barang.php');
}

$id = $_GET['id'];

$query = "SELECT * FROM databar WHERE id=$id";
$edit = $db->prepare($query);
$edit->execute();
$hasil = $edit->fetch(pdo::FETCH_ASSOC);

$res = $db->query('SELECT COUNT * FROM databar');
$num_rows = $res->fetchcolumn();

if($num_rows < 1){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Edit Data Barang</title>
</head>
<body>
    <header>
        <h3>Formulit Edit Data Barang</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />
        <p>
            <label for="pengirim">Pengirim: </label>
            <input type="text" name="pengirim" placeholder="Masukkan nama pengirim" value="<?php echo $edit['pengirim'] ?>" />
        </p>
        <p>
            <label for="alpengirim">Alamat: </label>
            <textarea name="alpengirim"><?php echo $edit['alpengirim'] ?></textarea>
        </p>
        <p>
            <label for="penerima">Penerima: </label>
            <input type="text" name="penerima" placeholder="Masukkan nama penerima" value="<?php echo $edit['penerima'] ?>" />
        </p>
        <p>
            <label for="alpenerima">Alamat: </label>
            <textarea name="alpenerima"><?php echo $edit['alpenerima'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan"/>
        </p>

        </fieldset>

    </form>
    
</body>
</html>