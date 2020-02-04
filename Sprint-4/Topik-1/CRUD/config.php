<?php

$database = 'localhost';
$user = 'ichlas';
$password = '12345';

$connect = new PDO("mysql:host=$this->database;dbname=databar", $this->user, $this->password);
?>