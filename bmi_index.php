<html>
<body>

<form action="" method="GET">
Name: 
<input type="text" name="name"><br>
Gender: 
<input type="radio" id="pria" name="gender" value="Pria">
<label for="pria">Pria</label>
<input type="radio" id="wanita" name="gender" value="Wanita">
<label for="wanita">Wanita</label><br>
Tinggi Badan:
<input type="text" name="tb"> cm<br>
<input type="submit">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['tb'])) {
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $height = $_GET['tb'];

    if (is_numeric($height) && $height > 0) {
        if ($gender == "Pria") {
            $ideal_weight = ($height - 100) - (0.1 * ($height - 100));
        } elseif ($gender == "Wanita") {
            $ideal_weight = ($height - 100) - (0.15 * ($height - 100));
        }

        echo "<br>Halo, $name! Berat badan ideal mu adalah " . round($ideal_weight, 2) . " kg.";
    } else {
        echo "<br>Please enter a valid height.";
    }
}
?>

</body>
</html>