<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=skola_php;charset=utf8",
        "root",
        ""
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    die("Chyba připojení: " . $e->getMessage());
}

$editKniha = null;

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $stmt = $pdo->prepare("DELETE FROM knihy WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

if (isset($_GET["edit"])) {
    $id = $_GET["edit"];

    $stmt = $pdo->prepare("SELECT * FROM knihy WHERE id = ?");
    $stmt->execute([$id]);

    $editKniha = $stmt->fetch();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nazev = $_POST["nazev"];
    $autor = $_POST["autor"];

    if (isset($_POST["id"]) && $_POST["id"] !== "") {
        $stmt = $pdo->prepare (
            "UPDATE knihy SET nazev=?, autor=? WHERE id=?"
        );

        $stmt->execute([$nazev, $autor, $_POST["id"]]);

    } else {
        $stmt = $pdo->prepare(
            "INSERT INTO knihy (nazev, autor)
            VALUES (?, ?)"
        );

        $stmt->execute([$nazev, $autor]);
    }

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

// $stmt = $pdo->query("SELECT * FROM knihy");

// $knihy = $stmt->fetchAll();

if (isset($_GET["search"]) && $_GET["search"] !== "") {
    $search = $_GET["search"];

    $stmt = $pdo->prepare(
        "SELECT * FROM knihy WHERE nazev LIKE ?"
    );

    $stmt->execute(["%" . $search . "%"]);
    $knihy = $stmt->fetchAll();
} else {
    $stmt = $pdo->query("SELECT * FROM knihy");
    $knihy = $stmt->fetchAll();
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

        <form method="post">
            <?php if ($editKniha): ?>
                <input type="hidden" name="id" value="<?= $editKniha["id"] ?>">
            <?php endif; ?>

            Název: <input type="text" name="nazev" value="<?= $editKniha ? htmlspecialchars($editKniha["nazev"]) : "" ?>">
            Autor: <input type="text" name="autor" value="<?= $editKniha ? htmlspecialchars($editKniha["autor"]) : "" ?>">
            <button type="submit">
                <?= $editKniha ? "Uložit změny" : "Přidat" ?>
            </button>
        </form>

        <form method="get">
            Hledat knihu:
            <input type="text" name="search" value="<?= htmlspecialchars($_GET["search"] ?? "") ?>">
            <button type="submit">Hledat</button>
            <a href="<?= $_SERVER["PHP_SELF"] ?>">Zobrazit vše</a>
        </form>

        <table border="1">
            <tr>
                <th>Název</th>
                <th>Autor</th>
                <th>Úprava</th>
                <th>Smazat</th>
            </tr>

            <?php foreach ($knihy as $kniha): ?>
                <tr>
                    <td><?= htmlspecialchars($kniha["nazev"]) ?></td>
                    <td><?= htmlspecialchars($kniha["autor"]) ?></td>
                    <td>
                        <a href="?edit=<?= $kniha["id"] ?>">Upravit</a>
                    </td>
                    <td>
                        <a href="?delete=<?= $kniha["id"] ?>" onclick="return confirm('Opravdu smazat?')">Smazat</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </main>
</body>
</html>