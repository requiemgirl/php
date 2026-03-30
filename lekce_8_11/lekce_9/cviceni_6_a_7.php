<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Vaše adresa je: " . $_SERVER["REMOTE_ADDR"] . "<br>";

    $_SESSION["first_name"] = $_POST["first_name"];

    echo "V session je uložené jméno: " . $_SESSION["first_name"];
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
    <header>
        <h1>9.6 a 9.7 - IP adresa s uložení session</h1>
    </header>

    <main>
        <form method="post">
            <label for="first_name">Zadejte křestní jméno: </label>
            <input type="text" name="first_name">
            <button type="submit">Odeslat</button>
        </form>

        
    </main>
</body>
</html>