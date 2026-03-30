<?php

$age = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = intval($_POST["age"] ?? 0);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>8.6 Věk jako číslo</h1></header>

    <main>
        <form method="POST">
            <label for="age">Věk: </label>
            <input type="number" name="age" required>
            <button type="submit">Odeslat</button>

            <?php
            if ($age !== null) {
                echo "<p>Je ti " . $age . " let.</p>";
            }
            ?>
        </form>
    </main>
</body>
</html>