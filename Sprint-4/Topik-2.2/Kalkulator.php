<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<title>Kalkulator</title>
<h1>Kalkulator Sederhana</h1>
</head>
<body>
	<form action="" method="post">
		<label for="bila1"> Angka Pertama</label> 
	<input id="bila1" type="number" name="bil1"><br>
	<select name="operasi">
		<option value='tambah'>+</option>
		<option value='kurang'>-</option>
		<option value='kali'>x</option>
		<option value='bagi'>/</option>
	</select><br>
	<label for="bila2"> Angka Kedua</label>
	<input id="bila2" type="number" name="bil2"><br>
	<input type="submit" name="kirim" value="Hitung!">
<?php
$angka1 = $_POST['bil1'];
$angka2 = $_POST['bil2'];
$operator = $_POST['operasi'];

	if (isset ($_POST ["kirim"])){
		if ($operator == 'tambah'){
			echo "<br/>Hasilnya adalah<br/><h1>".$angka1+=$angka2."</h1>";
		}elseif ($operator == 'kurang'){
			echo "<br/>Hasilnya adalah<br/><h1>".$angka1-=$angka2."</h1>";
		}elseif ($operator == 'kali'){
			echo "<br/>Hasilnya adalah<br/><h1>".$angka1*=$angka2."</h1>";
		}elseif ($operator == 'bagi'){
			echo "<br/>Hasilnya adalah<br/><h1>".$angka1/=$angka2."</h1>";
		}
	}
?>
</form>
<form action='' method="post">
    <input type='submit' name='logout' value='Logout'>
    </form>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION)){
	header('location: session.php');
}
if (isset($_POST['logout'])) {
		session_unset();
		header ('location: session.php');
	}
?>