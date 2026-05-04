<?php

$login = "";

// načtení cookie
if (isset($_COOKIE["login"])) {
    $login = $_COOKIE["login"];
}

// zpracování formuláře
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"] ?? "";

    if (isset($_POST["remember"])) {
        setcookie("login", $login, time() + 3600);
    } else {
        setcookie("login", "", time() - 3600);
    }
}

$login_safe = htmlspecialchars($login);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Cvičení 10.15 - Pamatuj si mě</h1>

<form method="POST">
    <label for="login">Uživatelské jméno: </label>
    <input type="text" name="login" id="login" value="<?= $login_safe ?>">

    <button type="submit">Přihlásit se</button><br>

    <label for="remember">Pamatuj si mě!</label>
    <input type="checkbox" name="remember" id="remember">
</form>

</body>
</html>