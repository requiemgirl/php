<?php

// VYTVOŘENÍ FUNKCE - komentár /** u každé fce musí být
/** Popis studenta
 * 
 * @param string $first_name - křestní jméno studenta
 * @param string $second_name - příjmení studenta
 * @param integer $age - věk studenta
 * 
 * @return string popis studenta
 * 
 * Vypíše popis studenta
 */
function studentDescription($first_name, $second_name, $age){//v zavorce jsou parametry
    return "Toto je " . $first_name . " " . $second_name . ". Věk studenta je " . $age . " let. <br>";
}


// POUŽITÍ
echo studentDescription("Harry", "Potter", 15);//v zavorce jsou argumenty
echo studentDescription("Ron", "Weasley", 14);
$student = studentDescription("Hermiona", "Granger", 15);
echo $student;