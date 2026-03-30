<?php

$user_name = "";
$password = "";
$login = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = htmlspecialchars(trim($_POST["user_name"] ?? ""));
    $password = htmlspecialchars(trim($_POST["password"] ?? ""));
    $login = true;
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
    <header><h1>8.3 POST metoda</h1></header>

    <main>
        <form method="post">
            <label for="user_name">Uživatelské jméno</label>
            <input type="text" name="user_name">

            <label for="password">Heslo</label>
            <input type="password" name="password">

            <button type="submit">Přihlásit se</button>

            <?php
            if ($login) {
                echo "<p>Přihlášení uživatele " . $user_name . " proběhlo úspěšně" . "</p>";
            }
            ?>
            
        </form>
    </main>
</body>
</html>