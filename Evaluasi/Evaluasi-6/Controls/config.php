<?php

$db_host = "localhost";
$db_user = "ichlas";
$db_pass = "12345";
$db_name = "users";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    die("Terjadi masalah : " . $e->getMessage());
}

?>