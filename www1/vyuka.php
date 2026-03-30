<?php

    /* Pravidla:
        • všechno psát malýma písmenama
        • case sensitive
        • na začátku nesmí být číslovka ani speciální znaky
        • popisné názvy musí dávat smysl
        • víceslovné proměnné camelCase nebo snake_case
        • pomlčky nejsou dovolené
    */

    // echo 'text';
    // echo "<br>";
    // echo 100;
    // echo "<br>";
    // echo "kondolence";
    // echo "<br>";
    // echo 666;


    // echo "<br>";
    // var_dump("Alexandra Pasz");
    // echo "<br>";
    // var_dump(1000);
    // echo "<br>";
    // var_dump(58.9);


    // $school = "nová škola";
    // echo($school);
    // echo "<br>";
    // echo($school);
    // echo "<br>";
    // echo($school);

    // $school_name = "Bradavice"; // string
    // var_dump($school_name);
    // echo "<br>";
    // $number_of_students = 988; // integer
    // var_dump($number_of_students);
    // echo "<br>";
    // $average_of_school = 2.33; //float
    // var_dump($average_of_school);
    // echo "<br>";

    // ! Proměnné a HTML

    // $school_name = "Bradavice";
    // echo "<h1>$school_name</h1>";

    // $sub_heading = "Škola čar a kouzel";
    // echo "<h2>$sub_heading</h2>";

    // $about_us_paragraph = "Pariatur mollit dolor sit quis laboris consequat duis ut et. Mollit ut nostrud non et irure. Sintnisi excepteur aliquip sint enim enim adipisicing.";
    // echo "<p>$about_us_paragraph</p>";

    // ! Odkazy - vnitrni uvozovky musi byt jine nez vnejsi, nebo vlozim pred druhe uvozovky "\" - eskejpovani
    // <a href=""></a> - to jsem rozdelila

    // $link_text = "Můj YouTube kanál";
    // $odkaz_na_kanal = "https://www.youtube.com/watch?v=FIZW6A6WxhA&list=PLQ8x_VWW6AktaGgUDBMm_3to4bLDdu8HI&index=11";
    
    // echo "<a href='$odkaz_na_kanal'</a>";
    // echo "$link_text";
    
    // echo "<br>";

    // ! Odkazy interni-soubory musi byt na stejne urovni, jinak musim zadat cestu pres slozku

    // echo '<a href="stranky/kontakt.php">Kontaktujte nás</a>';

    // ! Vraceni se do slozky -> viz kontakt.php
    //pouzit " .. " abych vyskocila ze slozky a vratila se o uroven vys
    // pokud by byla slozka ve slozce: ../../index.php

    // ! Přepisování proměnných (statické a dynamické typování)

    // $name = "David";
    // $name = 100; //dynamicke
    // echo $name;

    // ! Pravda, nepravda = true, false - boolean
    /*jestli ma prirazenou polohu v databazi
    jestli splnuje nejake podminky
    jestli je prihlaseny, odkazat na ruzne stranky podle toho jestli splnuje nebo ne
    pripadne zobrazeni hlasky - prihlas se
    database_connection - true/ false - napojeni na databazi
    */

    // $kolej = false;
    // $adult = false;
    
    // $is_logged = true;
    // $database_connection = false;

    // echo "Přihlášení uživatele: $is_logged";
    // echo "<br>";
    // echo "Napojení do databáze: $database_connection";

    // ! NULL - zatim hodnotu treba nevim, ale pozdeji ji mam v planu nastavit
    
    // $kolej = null;

    // echo $kolej;

    // $kolej = "Nebelvír";
    // echo $kolej;

    //! Matematické operace
    // $students_2022 = 100;
    // $students_2023 = 89; 

    // $result1 = $students_2023 - $students_2022;
    // $result2 = $students_2023 + $students_2022;
    // $result3 = $students_2023 * $students_2022;
    // $result4 = $students_2023 / $students_2022;

    // echo "Výsledek: $result1";
    // echo "<br>";
    // echo "Výsledek: $result2";
    // echo "<br>";
    // echo "Výsledek: $result3";
    // echo "<br>";
    // echo "Výsledek: $result4";
    // echo "<br>";

    //! Spojování proměnných
    // konkatecance - spojim pomoci tecky (NE plus)
    // $first_name = "Harry";
    // $second_name = "Potter";
    // $friend_first_name = "Ron";

    // echo $first_name." ".$second_name;
    // echo "<br>";
    // echo $first_name." a jeho kamarád ".$friend_first_name;

    //! Konverze datovych typu - Type conversion - php to dela automaticky

    // $year_price = "1500";
    // $year_count = "7";

    // $result_price = $year_price * $year_count;

    // echo $result_price;
    // echo "<br>";
    // var_dump($result_price);
    // echo "<br>";
    // var_dump($year_price);
    // echo "<br>";
    // var_dump($year_count);

    //! Negace - pouziji "!" pro vypsani opacne hodnoty
    //dulezite pro zjistovani, co se stalo

    // $database_connection = true;
    // var_dump(!$database_connection);

    //! Proměnné a vypisování
    // $first_name = "Harry";

    // echo "Ahoj ". $first_name;
    // echo "<br>";
    // echo "Ahoj $first_name";
    // echo "<br>";
    // echo "Ahoj {$first_name}";

    //! Pole (array) - vypisujeme pomoci indexu a cislovane jsou od 0
    // ALE muzu nastavit hodnoty pozice! a pak se vypisuji podle toho, jak chci. 
    //pokud chci pouze posunout cislovani, zmenim hdntu u prvniho, dalsi se prizpusobi
    
    // $ne_student_1 = "Harry";
    // $ne_student_2_ = "Hermiona";
    // $ne_student_3 = "Ron";

    // $students = [
    //     1 => "Harry", 
    //     4 => "Ron", 
    //     "Hermiona"
    //     ];
    
    // var_dump($students);
    // echo "<br>";
    // echo $students[1];
    // echo "<br>";
    // echo $students[4];
    // echo "<br>";
    // echo $students[5];
    // echo "<br>";

    // $students2 = array("Harry", "Ron", "Hermiona");
    // echo $students2[0];  ! stary zpusob zapisovani !

    //! Asociativni pole

    // $name = "Harry";
    // $student1 = [
    //     "first_name" => $name, // k oddělování pouzivat carky!
    //     "second_name" => "Potter",
    //     "college" => "Nebelvír",
    //     "age" => 15
    // ];
    
    // echo $student1["first_name"];
    // echo "<br>";
    // echo($name);

    // ! Dvoudimenzionální pole
    
    // $students =[
    //     [
    //         "first_name" => "Harry",
    //         "second_name" => "Potter",
    //         "age" => 15
    //     ],
    //     [
    //         "first_name" => "Hermiona",
    //         "second_name" => "Granger",
    //         "age" => 14
    //     ],
    //     [
    //         "first_name" => "Ron",
    //         "second_name" => "Wesley",
    //         "age" => 15
    //     ]
    // ];

    // echo $students [0]["first_name"];
    // echo "<br>";
    // echo $students [2]["second_name"];

    // ! Foreach cyklus - bud pouziju mezeru: '." "' nebo echo br, NEBO jako blokovy element "<></>"
    //na praci s polem

    // $students = ["Harry", "Ron", "Hermiona"];

    // foreach ($students as $index => $one_student) {
    //     $index = $index + 1;
    //     $index += 1; muzes vybrat o kolik
    //     $index++;
    //     echo $index.". ".$one_student;
    //     echo "<br>";
    // }

    // $student1 = [
    //     "jmeno" => "Harry",
    //     "prijmeni" => "Potter",
    //     "vek" => 15
    // ];

    // foreach ($student1 as $index => $one_info) {
    //     echo $index.": ".$one_info." | ";
    // }

    // ! Cyklus for
    // pro konkretni pocet akci - kolikrat se ma cyklus provest
    // (pocatek; podminka; pricitani pro zamezeni nekonecneho cyklu)

    // for ($i = 1; $i <= 10; $i++) { // $i += 1 //$i = 20; $i >= 20; $i-- countdown
    //     echo $i.". Harry";
    //     echo "<br>";
    // }

    //! FOR procvicovani
    // $first_name = "Harry Potter";

    // for ($i = 1; $i <= 10; $i++) {
    //     echo "<p>$first_name</p>";
    // }

    //! vícestránkový cyklus for

    // for ($i = 1; $i <= 5; $i++) {
    //     echo "<a href='stranka$i.php'>Další stránka</a>";
    //     echo "<br>";
    // }

    //! Cyklus while - nevime kolikrat, DOKUD

    // $month = 1;

    // while($month <= 12) {
    //     echo $month;
    //     echo "<br>";
    //     $month = $month +1;
    // };

    // $test_questions = ["1. otázka", "2. otázka", "3. otázka", "4. otázka", "5. otázka"];

    // $maximum = 5; // maximalni pocet otazek, ktere chceme vypsat(z celkového počtu)
    // $counter = 0;
    // while($counter < $maximum) {
    //     echo $test_questions[$counter];
    //     echo "<br>";
    //     $counter++;
    // }

    //! Podminky v PHP - === srovnani plati a i datovy typ souhlasi
    // == porovnání
    // = přiřazení

    // if (5 === 5) {
    //     echo "Ano, je to pravda";
    // } else {
    //     echo "Není to pravda";
    // }
    // echo "<br>";
    // $college = "Zmijozel";

    // if ($college === "Nebelvír") {
    //     echo "Vstupte";
    // } else {
    //     echo "Nemáte oprávnění vstoupit";
    // }

    //! Podmínky a proměnné

    // $college = "Zmijozel";

    // if ($college === "Nebelvír"){
    //     echo "Vstupte";
    // } else {
    //     echo "Nemáte oprávnění vstoupit";
    // }

    //! Podmínky a empty - kontrola existence dat

    // $articles = [];

    // var_dump(empty($articles));

    // if (empty($articles)) {
    //     echo "Neexistují žádné články";
    // } else {
    //     echo "Jsou k dispozici články pro vypsání na stránku";
    // }

    // NEBO

    // $articles = ["článek1"]; // pokud je práýzdné, je použité if. Pokud ne, tak se spustí echo

    // if (empty($articles)) {
    //     echo "Neexistují žádné články";
    //     exit();
    // }

    // echo "<br>";
    // echo "Další kód na stránce";

    //! Podmínky a elseif

    // $hour = 0;
    // $message = null;

    // if ($hour < 9) {
    //     $message = "Dobré ráno";
    // } elseif ($hour < 12) {
    //     $message = "Dobré dopoledne";
    // } elseif ($hour == 12) {
    //     $message = "Dobré poledne";
    // } elseif ($hour < 18) {
    //     $message = "Dobré odpoledne";
    // }else {
    //     $message = "Dobrý večer";
    // }

    // echo $message;ˇ

    //! podmínky a logické operátory - and

    // $age = 70;

    // if ($age >= 18 and $age <= 65) {
    //     echo "Dospělý, není v důchodovém věku";
    // } elseif ($age < 18) {
    //     echo "Dospívající";
    // } else {
    //     echo "Člověk v důchodovém věku";
    // }

    //! podmínky a logické operátory - or
    // 12345, 66778
    // $password = "66778";

    // if ($password == "12345" or $password == "66778") {
    //     echo "Dveře se otevírají, můžete vstoupit";
    // } else {
    //     echo "Neplatný kód, zkuste to, prosím, znovu";
    // }

    //! Switch statement
    //musí být break!!! 

    // $day = "pu";

    // switch ($day) {
    //     case "po":
    //         echo "Pondělí";
    //         break;
    //     case "ut":
    //         echo "Úterý";
    //         break;
    //     case "st":
    //         echo "Středa";
    //         break;
    //     default:// ošetřuje špatný input
    //         echo "Špatně zadaná zkratka";
    //         break;
    // }

    //! 


    




    

