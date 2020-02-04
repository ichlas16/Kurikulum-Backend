<?php 

require('database.php');

$db = new Database();
$db->query('SELECT * FROM databar');
$result = $db->resultset();

print_r($result);