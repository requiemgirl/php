<?php

$getZprava = "";
$postZprava = "";

if (isset($_GET["jmeno_get"])) {
    $getZprava = "GET formulář odeslal zprávu: " . $_GET["jmeno_get"];
}

if (isset($_POST["jmeno_post"])) {
    $postZprava = "POST formulář odeslal zprávu: " .$_POST["jmeno_post"];
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
    <main>
        <h1>GET formulář</h1>
        <form method="get">
            <label for="jmeno_get">Křestní jméno</label>
            <input type="text" name="jmeno_get">
            <button type="submit">Odeslat</button>
        </form>

        <p><?php echo $getZprava; ?></p>

        <h1>POST formulář</h1>
        <form method="post">
            <label for="jmeno_post">E-mail</label>
            <input type="text" name="jmeno_post">
            <button type="submit">Odeslat</button>
        </form>

        <p><?php echo $postZprava; ?></p>

    </main>
</body>
</html>