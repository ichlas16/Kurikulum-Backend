<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi CRUD</title>
</head>
<body>
    <h3>APLIKASI CRUD BARANG</h3>
    <form method="POST" action="">
    <label>Mau ngapain Hari inih?</label>
    <br/>
    <input type="submit" name="create" value="Input Data">
    <input type="submit" name="read" value="Lihat Data">
    <input type="submit" name="update" value="Ubah Data">
    <input type="submit" name="delete" value="Hapus Data">
    </form>
</body>
</html>
<?php
if(isset($_POST['create'])){
    header('location: create.php');
}if(isset($_POST['read'])){
    header('location: read.php');
}if(isset($_POST['update'])){
    header('location: update.php');
}if(isset($_POST['delete'])){
    header('location: delete.php');
}
?>