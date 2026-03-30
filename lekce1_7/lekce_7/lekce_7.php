<?php

echo "<h2>Cvičení 7.1</h2>";
$jidelnik = ["pizza", "rizoto", "salat"];
echo "Prvni jidlo: ".$jidelnik[0];

echo "<hr>";

echo "<h2>Cvičení 7.2</h2>";
$mestaPole = ["Praha", "Brno", "Ostrava"];
$mestaPole[] = "Plzen";
foreach ($mestaPole as $mesto) {
    echo $mesto."<br>";
}

echo "<hr>";

echo "<h2>Cvičení 7.4</h2>";
$slovaPole = ["PHP", "je", "super"];
$text = implode(" ", $slovaPole);
echo $text;

echo "<hr>";

echo "<h2>Cvičení 7.5</h2>";
$osobaInfo = [
    "jmeno" => "Alexandra",
    "vek" => 35,
    "mesto" => "Trinec"
];
echo "Jmeno: ".$osobaInfo["jmeno"];

echo "<hr>";

echo "<h2>Cvičení 7.8</h2>";
$tridaPole = [
    "A" => ["Petr", "David"],
    "B" => ["Lenka", "Ema"]
];
echo "Druhy student ze skupiny A: ".$tridaPole["A"][1];
