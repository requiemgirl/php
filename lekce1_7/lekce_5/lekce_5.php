<?php
//cviceni 5.1
$cislo = 15;

if ($cislo > 10) {
    echo "Číslo je větší než 10.";
}
echo "<br>";

// cviceni 5.2
$vek = 20;

if ($vek >= 18) {
    echo "Dospělý";
} else {
    echo "Nezletilý";
}
echo "<br>";

// cviceni 5.3
$number = -5;

if ($number > 0) {
    echo "Kladné";
}elseif ($number < 0) {
    echo "Záporné";
} else {
    echo "Nula";
}
echo "<br>";

// cviceni 5.4
$num = 50;

if ($num >= 1 && $cislo <= 100) {
    echo "Číslo je mezi 1 a 100.";
} else {
    echo "Číslo není v rozsahu.";
}
echo "<br>";

// cviceni 5.7
$age = 25;

if ($age >= 18 && $age <= 30) {
    echo "Mladý dospělý";
}