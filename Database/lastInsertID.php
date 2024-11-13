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

$connection->exec("INSERT INTO comments(comment) VALUES ('sangat skibidi')");
$id = $connection->lastInsertId();

var_dump($id);
$connection = null;

?>