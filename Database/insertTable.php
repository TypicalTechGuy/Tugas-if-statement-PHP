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

$sql = 
<<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko', 'Eko', 'eko@test.com');
SQL;

$connection->exec($sql);
$connection = null;


?>