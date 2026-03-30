<?php

    $price = 320;
    $hour = 20;

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceník našich služeb</title>
</head>
<body>
    <?php include "<assets-casti/header.php"; ?>
    <h1>Ceník</h1>
    <p>Cena našich služeb je <?= 320; ?> Kč.</p> 
    <p>Cena našich služeb je <?php echo 320; ?> Kč.</p> 
    <!-- php echo- se dá zapsat jako ?= -->

    <a href="index.php">Hlaavní stránka</a><br>

    <p>Cena našich služeb je <?= $price ?> Kč.</p>

    
        <?php if ($hour < 9): ?>
            <p>Dobré ráno</p>
        <?php elseif($hour < 12): ?>
            <p>Dobré poledne</p>
        <?php elseif($hour < 18): ?>
            <p>Dobré odpoledne</p>
        <?php endif; ?>
            <p>Dobrý večer</p>
    
    <!-- <?php
        if ($hour < 12) {
            echo "<p>Dobré ráno</p>";
        }elseif ($hour === 12){
            echo "<p>Dobré poledne</p>";
        }elseif ($hour < 18){
            echo "<p>Dobré odpoledne</p>";
        } else {
            echo "<p>Dobrý večer</p>";
        }
    ?> -->
    <?php
        $students = ["Harry", "Ron", "Hermiona"];
    ?>

    <ul>
        <?php foreach($students as $one_student): ?>
            <li><?php echo $one_student ?></li>
        <?php endforeach; ?>    
    </ul>

    <ul>
        <li>Jedna</li>
        <li>Dva</li>
        <li>Tři</li>
    </ul>

    <?php include "assets-casti/footer.php"; ?>
</body>
</html>