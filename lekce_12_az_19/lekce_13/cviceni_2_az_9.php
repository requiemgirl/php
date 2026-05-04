<?php

    try {
        $pdo = new PDO(
            "mysql:host=localhost; dbname=skola_php;charset=utf8",
            "root",
            ""
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Připojeno!" . "<br>";
    }

    catch (PDOException $e) {
        echo "Chyba: " . $e->getMessage();
    }

    // $stmt = $pdo->prepare(
    //     "SELECT * FROM produkty WHERE cena > ?"
    // );

    // $stmt->execute([100]);

    // $produkty = $stmt->fetchAll();

    // foreach ($produkty as $produkt) {
    //     echo $produkt["nazev"] .  " - " . $produkt["cena"] . "<br>";
    // }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nazev = trim($_POST["nazev"] ?? "");
        $cena = trim($_POST["cena"] ?? "");

        if ($nazev ==="" || $cena === "") {
            $chyba = "Vyplň název i cenu."; 
        } elseif (!is_numeric($cena)) {
            $chyba = "Cena musí být číslo.";
        } elseif ($cena <= 0) {
            $chyba = "Zadarmo ani kuře nehrabe :)";
        } else {
            $stmt = $pdo->prepare(
                "INSERT INTO produkty (nazev, cena)
                VALUES (?, ?)"
            );
            $stmt->execute([$nazev, $cena]);

            header("Location: " . $_SERVER["PHP_SELF"]);
            exit;
        }    
    }

    if (isset($_GET["update"])) {
        $id = (int) $_GET["update"];

        $stmt = $pdo->prepare(
            "UPDATE produkty SET cena = ? WHERE id = ?"
        );
        $stmt->execute([999, $id]);

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }

    if (isset($_GET["delete"])) {
        $id = (int) $_GET["delete"];

        $stmt = $pdo->prepare(
            "DELETE FROM produkty WHERE id = ?"
        );
        $stmt->execute([$id]);

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }

    $stmt = $pdo->prepare(
        "SELECT * FROM produkty WHERE cena > ?"
        );
    $stmt->execute([100]);

    $produkty = $stmt->fetchAll();


    // $stmt = $pdo->prepare(
    //     "INSERT INTO produkty (nazev, cena)
    //     VALUES (?, ?)"
    // );
    // $stmt->execute(["Velké hrábě", 458]);

    // $stmt = $pdo->prepare("
    // INSERT INTO produkty (nazev, cena)
    // VALUES (:nazev, :cena)
    // ");

    // $stmt->execute([
    //     ":nazev" => "Koště",
    //     ":cena" => 179
    // ]);

    // $stmt = $pdo->query("SELECT * FROM produkty");
    // $produkty = $stmt->fetchAll();

    // foreach ($produkty as $produkt) {
    //     echo $produkt["nazev"] . "<br>";
    // }

    // $stmt = $pdo->prepare("
    // UPDATE produkty
    // SET cena = ?
    // WHERE id = ?
    // ");
    // $stmt->execute([350, 1]);

    // $stmt = $pdo->prepare(
    //     "DELETE FROM produkty
    //     WHERE id = ?"
    // );
    // $stmt->execute([3]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Cvičení 2 až 9</h1></header>

    <main>
        <form method="post">
            <input type="text" name="nazev">
            <input type="number" name="cena">
            <button type="submit">Přidat produkt</button>
        </form>

        <?php if (!empty($chyba)): ?>
            <p style="color:red;"><?= htmlspecialchars($chyba) ?></p>
        <?php endif; ?>

        <h2>Výpis produktů s cenou vyšší než 100,- Kč</h2>
        <table border="1">
            <tr>
                <th>Název</th>
                <th>Cena</th>
                <th>Úpravy</th>
            </tr>
            <?php foreach ($produkty as $produkt): ?>
                <tr>
                    <td><?= htmlspecialchars($produkt["nazev"]) ?></td>
                    <td><?= htmlspecialchars($produkt["cena"]) ?></td>
                    <td>
                        <a href="?update=<?= $produkt["id"] ?>">Změnit cenu na 999,-</a>
                        <a href="?delete=<?= $produkt["id"] ?>">Smazat</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>