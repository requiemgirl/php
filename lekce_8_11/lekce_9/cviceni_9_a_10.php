<?php

setcookie("barva", "modrá", time() + 300);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>9.9 a 9.10 - COOKIE vytvoření a expirace</h1>
    </header>

    <main>
        <?php
            if (isset($_COOKIE["barva"])) {
                echo "Barva cookie je: " . $_COOKIE["barva"] . " a byla nastavena na 5 minut.";
            } else {
                echo "Cookie byla nastavena na 5 minut. Obnov stránku.";
            }
        ?>
    </main>
</body>
</html>