<?php

$jmeno = "";

if (isset($_POST["jmeno"])) {
    $jmeno = htmlspecialchars(trim($_POST["jmeno"]));
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
        <h1>8.1 Jednoduchý formulář</h1>
    </header>
    
    <main>
        <form method="post">
            <input type="text" name="jmeno" placeholder="Zadej jméno">
            <button type="submit">Odeslat</button>
        </form>
            
        <?php
        if ($jmeno !== "") {
            echo "<p>Tvoje jméno je: " . $jmeno . "</p>";
        }
        ?>
    </main>

</body>
</html>