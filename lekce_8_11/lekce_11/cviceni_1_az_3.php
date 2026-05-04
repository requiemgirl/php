<?php

$obsah = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["vytvorit"])) {
        file_put_contents("uploads/data.txt", "Nový obsah\n");
    }

    if (isset($_POST["pridat"])) {
        file_put_contents("uploads/data.txt", "lorem ipsum\n", FILE_APPEND);
    }
    $obsah = file_get_contents("uploads/data.txt");
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
    <form method="POST">
        <button type="submit" name="vytvorit">Vytvořit soubor</button><br>
        <button type="submit" name="pridat">Přidat řádek</button>
    </form>

    <p><?php echo nl2br($obsah); ?></p>
</body>
</html>