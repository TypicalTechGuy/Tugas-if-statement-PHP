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
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

$connection = getConnection();

$result = $connection->prepare($sql);
$result->bindParam("username", $username);
$result->bindParam("password", $password);
$result->execute();

$success = false;
foreach ($result as $row) {
    $success = true;
} if ($success) {
    echo "Login sukses" . PHP_EOL;
} else {
    echo "Login gagal" . PHP_EOL;
}

?>