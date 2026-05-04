<?php

$zprava = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"] ?? "";

    if (strlen($password) < 8 ) {
        $zprava = "Heslo je příliš krátké.";
    } else {
        $zprava = "Heslo bylo přijato.";
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <section>
            <h1>Cvičení 8.12 - Mini validace hesla</h1>
        </section>
    </header>

    <main>
        <form method="POST">
            <label for="password">Heslo: </label>
            <input type="password" name="password">
            <button type="submit">Odeslat</button>
        </form>

        <p><?php echo "$zprava"; ?></p>
    </main>
    
</body>
</html>