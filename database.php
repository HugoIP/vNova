<?php

$server = 'localhost';
$username = 'root';
$password = 'daniel';
$database = 'database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  error_log('Conexion exitosa');
} catch (PDOException $Error) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
