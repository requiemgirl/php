<?php

    require "assets/database.php";
    require "assets/zak.php";

    $connection = connectionDB();

    if (isset($_GET["id"]) and is_numeric ($_GET["id"]) ) {
        $sql = "SELECT * 
            FROM student
            WHERE id = ". $_GET["id"]
            ;
    
        $result = mysqli_query($connection, $sql);

        if ($result === false) {
            echo mysqli_error($connection);
        } else {
            $students = mysqli_fetch_assoc($result);
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
    <?php require "<assets/header.php"; ?>
    
    <main>

        <section class="main-heading">
            <h1>Informace o žákovi</h1>
        </section>

        <section>
            <?php if ($students === null): ?>
                <p>Žák nenalezen</p>
            <?php else: ?>
                <h2><?php echo htmlspecialchars($students["first_name"])." ".htmlspecialchars($students["second_name"]) ?></h2>
                <p>Věk: <?php echo htmlspecialchars($students["age"]) ?></p>
                <p>Dodatečné informace: <?= htmlspecialchars($students["life"]) ?></p>
                <p>Kolej: <?= htmlspecialchars($students["college"]) ?></p>
            <?php endif ?>

            <a href="index.php">Zpět na úvodní stranu</a>

        </section>

    </main>

    <?php require "assets/footer.php"; ?>

</body>
</html>