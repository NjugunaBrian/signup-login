<?php

$host = 'localhost';
$dbname = 'firstdatabase';
$dbusername = 'root';
$dbpassword  = '';

try{
$PDO =  new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo "Connection failed " . $e->getMessage();
}