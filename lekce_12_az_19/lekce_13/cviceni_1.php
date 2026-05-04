<?php

    try {
        $pdo = new PDO (
            "mysql:host=localhost;dbname=skola_php;charset=utf8",
            "root",
            ""
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Připojeno!";
    }
    catch (PDOException $e) {
        echo "Chyba: " . $e->getMessage();
    }

    $stmt = $pdo->prepare(
        "SELECT * FROM studenti WHERE rocnik > ?"
    );

    $stmt->execute([4]);

    $rows = $stmt->fetchAll();

    foreach ($rows as $row) {
        echo $row["jmeno"] . "<br>";
    }

    $stmt = $pdo->prepare(
        "INSERT INTO studenti (jmeno, rocnik)
        VALUES (:name, :year)"
    );

    $stmt->execute([
        ":name" => "Jana",
        ":year" => 4
    ]);

    $stmt = $pdo->prepare(
        "UPDATE studenti SET rocnik = ? WHERE id = ?"
    );
    $stmt->execute([2, 1]);

    $stmt = $pdo->prepare(
        "DELETE FROM studenti WHERE id = ?"
    );
    $stmt->execute([3]);