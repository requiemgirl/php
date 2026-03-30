<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["soubor"])) {
        $nazevSouboru = $_FILES["soubor"]["name"];
        $pripona = strtolower(pathinfo($nazevSouboru, PATHINFO_EXTENSION));

        if ($pripona == "jpg") {
            echo "Soubor má příponu .jpg";
        } else {
            echo "Soubor nemá příponu .jpg";
        }
    }
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
        <h1>9.12 - Kontrola typu souboru</h1>
    </header>

    <main>
        <form method="post" enctype="multipart/form-data">
            <label for="soubor">Vyber soubor</label>
            <input type="file" name="soubor">
            <button type="submit">Zkontrolovat</button>
        </form>
    </main>
</body>
</html>