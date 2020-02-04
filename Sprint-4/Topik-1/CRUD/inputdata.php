<?php

require('database.php');

$db = new Database();
$db->query('INSERT INTO databar (nama) VALUES (:data)');  
$db->bind(':data', 'Contoh Data F');
$db->execute();

echo $db->lastInsertId();