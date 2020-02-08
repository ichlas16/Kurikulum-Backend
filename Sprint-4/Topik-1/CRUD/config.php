<?php

$server = 'localhost';
$user = 'ichlas';
$pass = '12345';
$db_name = 'crud_db';

$db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);

if ( !$db ){
    die("Gagal terhubung dengan database!");
}