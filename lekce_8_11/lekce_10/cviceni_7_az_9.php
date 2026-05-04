<?php

// uložení z formuláře do cookie
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barva = $_POST["barva"] ?? "";
    setcookie("barva", $barva, time() + 5);

    //echo "Zadané cookie: " . $barva;
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblíbená barva</title>
</head>
<body>

    <h1>Vyber oblíbenou barvu</h1>

    <form method="POST">
    <input type="text" name="barva" placeholder="např. modrá">
    <button type="submit">Uložit</button>
    </form>

    <hr>

    <p><?php
        if (isset($_COOKIE["barva"])) {
            echo "Tvoje oblíbená barva je: " . $_COOKIE["barva"];
        } else {
            echo "Zatím nemáš uloženou barvu";
        }
        ?></p>

</body>
</html>