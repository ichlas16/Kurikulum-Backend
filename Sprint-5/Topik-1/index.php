<!DOCTYPE html>
<html lang="en">
<center><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Menghitung Bidang Datar</title>
    <h3>Ingin Menghitung Apa Hari Ini?</h3>
</head></center>
<center><body>
    <div class="input">
    <form action="" method="POST">
        <input type="submit" name="lingkaran" value="Lingkaran" />
        <input type="submit" name="persegi" value="Persegi" />
        <input type="submit" name="segitiga" value="Segitiga" />
    </form></center>
    </div>
</body>
</html>

<?php

if(isset($_POST['lingkaran'])){
    header('Location: html/input-ling.php');
}if(isset($_POST['persegi'])){
    header('Location: html/input-per.php');
}if(isset($_POST['segitiga'])){
    header('Location: html/input-seg.php');
}

?>