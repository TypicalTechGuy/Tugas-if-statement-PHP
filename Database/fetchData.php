<?php
function getConnection(): PDO {
    $servername = "localhost";
    $port = 3306;
    $username = "root";
    $password = "";
    $dbname = "konser_musik";

    return new PDO("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
}
$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
$customers = $result->fetchAll();

var_dump($customers);

?>