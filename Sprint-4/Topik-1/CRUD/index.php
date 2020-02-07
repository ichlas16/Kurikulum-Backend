<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Catatan Pengiriman</title>
</head>
<body>
    <h1>Aplikasi CRUD Barang</h1>
    <form method="POST" action="">
        <div>
            Pengen ngapain hari inih?
        </div>
            <input type="submit" name="create" value="Input Data">
            <input type="submit" name="read" value="Melihat Data">
            <input type="submit" name="Update" value="Mengubah Data">
            <input type="submit" name="delete" value="Hapus Data">
    </form>
</body>
</html>
<?php
if (isset($_POST["create"])){
        header('location: inputdata.php');
}if (isset($_POST['read'])){
        header('location: read.php');
}
?>