<?php

require_once("config.php");

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username='$username'";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user === null){
        // verifikasi password
        if(password_verify($password, $user[$password])){
            // buar session
            session_start();
            $_SESSION['user'] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ketampanan itu yang Utama</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

            <p>&larr; <a href="index.php">Home</a></p>
            
            <h4>Masuk ke Aplikasi Pengiriman Barang</h4>
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

            <form action="" method="POST">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password" />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="login" value="Log In"/>
            </form>

            </div>

            <div class="col-md-6">
                <?php echo $stmt." test"; ?>
            </div>
        </div>
    </div>
</body>
</html>