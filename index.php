<?php

$dsn = 'mysql:dbname=demo;host=mysql';
$user = 'root';
$password = '123';
$pdo = new PDO($dsn, $user, $password);
$stmt = $pdo->query('show databases;');
print_r($stmt->fetchAll(PDO::FETCH_OBJ));
echo 123;
