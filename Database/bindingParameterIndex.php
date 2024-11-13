<?php
function getConnection(): PDO {
    $servername = "localhost";
    $port = 3306;
    $username = "root";
    $password = "";
    $dbname = "konser_musik";

    return new PDO("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
}

$username = "admin'; #";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$connection = getConnection();

$result = $connection->prepare($sql);
$result->execute([$username, $password]);

$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $adminUsername = $row['id'];
    $adminPassword = $row['name'];

    echo "Admin ID: " . $adminUsername . "<br>";
    echo "Admin Name: " . $adminPassword . "<br>";
} else {
    echo "No matching admin found.";
}


?>