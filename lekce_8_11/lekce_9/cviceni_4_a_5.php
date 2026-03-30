<?php

if (isset($_REQUEST["first_name"])) {
    echo "Zadané jméno je " . $_REQUEST["first_name"];
} else {
    echo "Žádné jméno nebylo zadáno.";

}
echo "<br>";

echo "Typ požadavku je: " . $_SERVER["REQUEST_METHOD"];
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
        <h1>9.4 $_REQUEST a 9.5 $_SERVER - výpis požadavku</h1>
    </header>
    <main>

        <form method="post">
            <label for="first_name">Křestní jméno: </label>
            <input type="text" name="first_name">
            <button type="submit">Odeslat</button>
        </form>

    </main>
</body>
</html>