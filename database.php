<?php

$server = 'localhost';
$username = 'id10461579_databasee';
$password = 'DAnielas999_';
$database = 'id10461579_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  error_log('Conexion exitosa');
} catch (PDOException $Error) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
