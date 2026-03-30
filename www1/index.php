<?php

    echo strlen("Saša");
    echo "<br>";
    echo mb_strlen("Saša");
    echo "<br>";
    $array = ['lastname', 'email', 'phone', 100];
    echo (implode(" | ", $array));
    echo "<br>";
    
?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- levy alt+shift+sipka dolu - kopiruje radek pred kurzorem  -->
<!-- ctrl + "´" - vedle backspace - udela komentar -->
<!-- ctrl + enter tě hodí na další řádek - když není potřeba psát středník -->
<!-- lorem * x - kolik odstavců chci, lorem + x(cislo) urcity pocet slov -->

<?php require_once "assets-casti/header.php"; ?>
<?php require "assets-casti/header.php"; ?>

    <!-- 
    INCLUDE & REQUIRE - 
    include pri chybe pokracuje ve vypisovani kodu
    requiere pri chybe nenacte nic pod ni - prpo vyvoj lepsi!
    require_once - omezuje chybu, kdyz nahodou kod vlozim dvakrat - ale pri chybe zastavi zbytek kodu!
    -->
    <main>
        <section>
            <h2>Nadpis 2. úrovně</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis adipisci? Consequatur <strong>tučné písmo</strong> suscipit sint tempore perspiciatis vero adipisci, <br> illo itaque molestiae ipsa dolore officiis debitis voluptatem, excepturi quisquam mollitia. Eligendi!</p>
            <!-- target="_blank" otevre odkaz v nove strance -->
            <a href="https://www.google.com" target="_blank">Vyhledávač GuluGulu</a><br>

            
            <a href="https://www.youtube.com/watch?v=zysE-Nz7bj4&list=PLQ8x_VWW6AktaGgUDBMm_3to4bLDdu8HI&index=46" target="_blank">YouTube kanál</a>
        </section>

        <section name="seznam">
            <ol>
                <li><a href="kontakt.html">Nůžky</a></li>
                <li>Papír</li>
            </ol>

            <ul>
                <li>Čaj</li>
                <li>Housky</li>
            </ul>
        </section>

        <section>
            <h2>Odkazy na další služby webu</h2>
            <a href="sluzby.php">Naše služby</a><br>
            <a href="cenik.php">Ceník</a><br>
            <a href="kontakt.php">Kontaktujte nás</a><br>
            <!-- alt - identifikace pro nevidomé nebo vyhledávač -->
            <img src="img/obr1.webp" alt="Herní konzole"> <br>
        </section>

        
    </main>
    
    <?php include "assets-casti/footer.php"; ?>
</body>
</html>