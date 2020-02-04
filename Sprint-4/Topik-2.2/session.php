<?php
session_start();
if (isset($_SESSION['nama'])){
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
        <input type="text" name="nama" placeholder="Username" required>
            <br/>
        <label>Password</label>
            <br/>
        <input type="password" name="password" placeholder="Password" required>
            <br/>
        <input type="submit" name="submit" value="Kirim">
    </form>
    <br/>
</body>
</html>

<?php
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $_SESSION['nama'] = $nama;
    $_SESSION['password'] = $password;
    echo $_SESSION['nama'];
    
    header('location: Kalkulator.php');
}