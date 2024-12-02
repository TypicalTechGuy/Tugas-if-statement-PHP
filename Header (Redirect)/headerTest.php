<?php
    if ($_SERVER['REQUEST_METHOD'] == $_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if ($role === 'user') {
            header("Location: user.php");
            exit;
        } elseif ($role === 'admin') {
            header("Location: admin.php");
            exit;
        } elseif ($role === 'superadmin') {
            header("Location: superadmin.php");
            exit;
        } else {
            echo "Invalid role selected!";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>something something about form</title>
</head>
<body>
    <form action="" method="POST">
    <label for="usn">Username: </label><br>
    <input type="text" id="usn" name="username" required><br><br>
    <label for="pwd">Password: </label><br>
    <input type="password" id="pwd" name="password" required><br><br>
    <label for="role">Role: </label>
    <select>
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="superadmin">Super Admin</option>
    </select>
    <br><br>
    <button>Submit</button>
    </form>
</body>
</html>