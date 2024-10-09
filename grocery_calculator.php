<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping Calculator</title>
</head>
<body>
    <h1>Grocery Shopping Calculator</h1>
    <form method="post">
        <label for="vegetables_price">Sayuran: (Rp)</label>
        <input type="number" id="vegetables_price" name="vegetables_price" value="0" min="0"><br><br>

        <label for="fruits_price">Buah-buahan: (Rp)</label>
        <input type="number" id="fruits_price" name="fruits_price" value="0" min="0"><br><br>

        <label for="sugar_price">Gula: (Rp)</label>
        <input type="number" id="sugar_price" name="sugar_price" value="0" min="0"><br><br>

        <label for="discount">Diskon (%): </label>
        <input type="number" id="discount" name="discount" value="10" min="0"><br><br>

        <input type="submit" name="calculate" value="Calculate Total">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $price_vegetables = (int)$_POST['vegetables_price'];
        $price_fruits = (int)$_POST['fruits_price'];
        $price_sugar = (int)$_POST['sugar_price'];

        $discount_percent = (int)$_POST['discount'];
        $discount_rate = $discount_percent / 100;

        $total = $price_vegetables + $price_fruits + $price_sugar;

        $discounted_total = $total - ($total * $discount_rate);

        echo "<h2>Total biaya belanjaan setelah $discount_percent% diskon: Rp " . number_format($discounted_total, 0, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
