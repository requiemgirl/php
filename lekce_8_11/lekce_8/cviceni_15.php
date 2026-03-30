<?php

    $odeslano = false;
    $first_name = "";
    $last_name = "";
    $age = "";
    $email = "";
    $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = htmlspecialchars(trim($_POST["first_name"]));
        $last_name = htmlspecialchars(trim($_POST["last_name"]));
        $age = intval($_POST["age"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $gender = htmlspecialchars(trim($_POST["gender"] ?? ""));
        $odeslano = true;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Lekce - Osobní karta</title>
</head>
<body>
    <header>
        <h1>Osobní karta</h1>
    </header>

    <main>
        <section>
            <form method="post">
                
                <input type="text" name="first_name" placeholder="Jméno">
                <br>
                <input type="text" name="last_name" placeholder="Příjmení">
                <br>
                <input type="number" name="age" placeholder="Věk">
                <br>
                <input type="email" name="email" placeholder="E-mail">
                <br>
                <input type="radio" name="gender" value="muž"> Muž
                <br>
                <input type="radio" name="gender" value="žena"> Žena
                <br>
                <button type="submit">Odeslat</button>

            </form>

            <?php

                if ($odeslano) {
                    echo "<h2>VIZITKA</h2>";
                    echo "<p>Registrace proběhla úspěšně. Vítejte, " . $first_name . "!" . "</p>";
                    echo "<p>Jméno: " . $first_name . " " . $last_name . "</p>";
                    echo "<p>Věk: " . $age . "</p>";
                    echo "<p>E-mail: " . $email . "</p>";
                    echo "<p>Pohlaví: " . $gender . "</p>";

                }

            ?>

        </section>
    </main>

    <footer></footer>

</body>
</html>