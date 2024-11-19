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

$sql = "SELECT * FROM pesan";
$result = $connection->query($sql);

echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<thead>";
echo "<tr>";

$columns = array_keys($result->fetch(PDO::FETCH_ASSOC));
foreach ($columns as $column) {
    echo "<th style='padding: 8px; text-align: left;'>$column</th>";
}
echo "</tr>";
echo "</thead>";

echo "<tbody>";

$result = $connection->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if (in_array(null, $row, true)) {
        continue;
    }

    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='padding: 8px; text-align: left;'>$value</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

$connection = null;
?>