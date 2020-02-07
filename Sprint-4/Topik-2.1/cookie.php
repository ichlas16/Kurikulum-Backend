<?php
if(isset($_COOKIE['nama'])){
    header('location: Kalkulator.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pengiriman Barang</title>
</head>
<body>
    <form method="POST" action="">
        <label>Username</label>
            <br/>
        <input type="text" name="nama" placeholder="Username">
            <br/>
        <label>Password</label>
            <br/>
        <input type="password" name="password" placeholder="Password">
            <br/>
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    echo $nama;

    setcookie('nama', $nama, time() + 3600, "/");
    setcookie('password', $password, time() + 3600, "/");
    header('location: Kalkulator.php');
}
?>