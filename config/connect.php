<?php
$host = 'localhost';
$dbname = 'db_trtm';
$username = 'root';
$password = 'root';

try {
    $coon = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $coon->exec(" set names utf8 ");
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
