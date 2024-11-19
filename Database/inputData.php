<?php
function getConnection(): PDO {
    $servername = "localhost";
    $port = 3306;
    $username = "root";
    $password = "";
    $dbname = "konser_musik";

    return new PDO("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
}

try {
    $connection = getConnection();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $sql = "INSERT INTO pesan (nama, email, pesan) VALUES (:nama, :email, :pesan)";
        $stmt = $connection->prepare($sql);

        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pesan', $pesan);

        if ($stmt->execute()) {
            header("Location: formInputData.php?message=Pesan Berhasil Terkirim!");
        } else {
            header("Location: formInputData.php?message=Pesan Tidak Terkirim!");
        }
    }
} catch (PDOException $e) {
    header("Location: formInputData.php?message=error: ". $e->getMessage());
}

exit;
?>