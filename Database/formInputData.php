<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Input</title>
</head>
<body>
    <form action="inputData.php" method="post">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
        <br><br>
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <br><br>
        <label for="pesan" class="form-label">Pesan:</label>
        <input type="text" class="form-control" id="pesan" name="pesan" required>
        <br><br>
        <button type="submit" class="btn">Submit</button>
    </form>

    <?php if (isset($_GET['message'])): ?>
        <p style="color: green;"><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php endif; ?>
</body>
</html>