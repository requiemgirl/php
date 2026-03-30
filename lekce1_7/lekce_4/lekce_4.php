<?php

//cviceni 1
function pozdrav() {
    echo "Ahoj světe.";
}

pozdrav();
echo "<br>";

// cviceni 2
$jmeno = "Alexandra";
function zdraveni($jmeno) {
    echo "Ahoj ".$jmeno;
}

zdraveni("$jmeno");
echo "<br>";

// cviceni 3
function nasob($a, $b) {
    return $a * $b;
}

$vysledek = nasob(5, 3);
echo $vysledek;
echo "<br>";

// cviceni 4
function zdravit($jmeno = "Neznámý") {
    echo "Ahoj ".$jmeno;
}

zdravit();
echo " | ";
zdravit("Eva");
echo "<br>";

// cviceni 5
function nasobit(int $a, int $b): int {
    return $a * $b;
}

echo nasobit(4, 5);
echo "<br>";
