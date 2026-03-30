<?php

echo "<h2>Cvičení 6.1</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo $i."<br>";
}

echo "<hr>";

echo "<h2>Cvičení 6.4</h2>";
$o = 1;
while ($o <= 5) {
    echo $o."<br>";
    $o++;
}

echo "<hr>";

echo "<h2>Cvičení 6.6</h2>";
$zvirata = ["pes", "kočka", "králík"];
foreach ($zvirata as $zvire) {
    echo $zvire."<br>";
}

echo "<hr>";

echo "<h2>Cvičení 6.7</h2>";
$veta = "Ahoj jak se máš";
$slova = explode(" ", $veta);
foreach ($slova as $slovo) {
    echo $slovo."<br>";
}

echo "<hr>";

echo "<h2>Cvičení 6.9</h2>";
$soucet = 0;
for ($i = 1; $i <= 100; $i++) {
    $soucet += $i;
}
echo "Součet je: ".$soucet;
