<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //2.1
    $name = "Alexandra";
    echo $name;
    echo "<br>";
    
    //2.2
    $price = 50;
    echo "Cena produktu je ".$price." ". "Kč.";
    echo "<br>";
    
    //2.3
    $last_name = "Pasz";
    echo "Jmenuji se"." ".$name." ".$last_name.".";
    echo "<br>";
    
    //2.4
    $number = 50;
    var_dump($number);
    echo "<br>";
    
    //2.5
    $aktivni = true;
    var_dump($aktivni);
    echo "<br>";
    
    //2.6
    $vek = [18, 23, 48];
    echo $vek[2];
    echo "<br>";
    
    //2.7
    $text = "Ahoj";
    echo $text." ".$name." ".$last_name.".";
    echo "<br>";
    
    //2.8
    $slovo = "Ahoj";
    echo strlen($slovo);
    echo "<br>";
    
    //2.9
    $a = 5;
    $b = 7;
    $c = $a + $b;

    echo $c;
    echo "<br>";

    //2.10
    $x = 5;
    var_dump($x);
    echo "| ";
    $x = "pět";
    var_dump($x);
    echo "<br>";

    //2.11
    $nic = null;
    var_dump($nic);
    echo "<br>";

    //2.12
    $cislo = 20;
    echo "Výsledek je: ".$cislo;
    echo "<br>";

    //2.13
    $jmeno = "Alexandra";
    echo "Ahoj $jmeno";
    echo "<br>";
    echo 'Ahoj $jmeno'; // nefunguje
    echo "<br>";

    //2.14
    $veta = "Zahradní sezóna co nevidět a začne a je třeba se na ní náležitě připravit.";
    echo strtoupper($veta);
    echo "<br>";

    //2.15
    $jmeno2 = "Alexandra";
    $vek = 36;
    $mesto = "Třinec";

    echo "Jmenuji se ".$jmeno2.", "."je mi ".$vek." let a pocházím z ".$mesto.".";
    echo "<br>";





    ?>
</body>
</html>