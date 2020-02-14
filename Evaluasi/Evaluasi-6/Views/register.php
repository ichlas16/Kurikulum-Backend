<?php
session_start();
if(isset($_SESSION["username"])) header("Location: timeline.php");

require_once("../Controls/config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = $_POST['username'];
    // enkripsi password
    $password = $_POST["password"];

    // menyiapkan query
    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password
    );

    // eksekusi query untuk menyimpan data ke database
    $saved = $stmt->execute($params);

    // jika query berhasil disimpan, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
    header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User Baru</title>
    <link rel="stylesheet" href="../Models/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../Models/css/animate.css">
</head>
<body class="bg-light">
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        
        <p>&larr; <a href="../index.php">Home</a></p>
        
            <h4>Bergabunglah bersama ribuan orang sukses lainnya...</h4>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Masukkan username" required />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Masukkan password" required />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
            </form>

            </div>
        <div class="col-md-6, animated bounce">
            <img class="img img-responsive" src="../Models/img/sign-up.svg" />
        </div>

    </div>
</div>
</body>
</html>