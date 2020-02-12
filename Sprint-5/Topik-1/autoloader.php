<?php

function __autoload($class){
    require_once($class.".php");
}

$lingkaran = new Lingkaran();
$persegi = new Persegi();
$segitiga = new Segitiga();

?>