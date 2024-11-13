<?php
$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";
$dbname = "gaming_corner";
try {
    $conn = new PDO("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    $connection = null;
} catch (PDOException $exception) {
    echo "Error terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
}

?>