<?php

//XSS - cross-site-scripting

require "assets/database.php";

$first_name = null;
$second_name = null;
$age = null;
$life = null;
$college = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $first_name = $_POST["first_name"];
    $second_name = $_POST["second_name"];
    $age = $_POST["age"];
    $life = $_POST["life"];
    $college = $_POST["college"];
    // if ($_POST["first_name"] === "") { //misto toho dam k inputu requiered
    //     die("Křestní jméno je povinné");
    // }

    $sql = "INSERT INTO student (first_name, second_name, age, life, college)
    VALUES (?, ?, ?, ?, ?)";

    $connection = connectionDB();

    $statement = mysqli_prepare($connection, $sql);

    if ($statement === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($statement, "ssiss", $_POST["first_name"], $_POST["second_name"], $_POST["age"], $_POST["life"], $_POST["college"]);

        if (mysqli_stmt_execute($statement)) {
            $id = mysqli_insert_id($connection);
            echo "Úspěšně vložen žák s id $id";

            if (isset($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] != "off") {
                $url_protocol = "https";
            } else {
                $url_protocol = "http";
            }

            // localhost = $_SERVER["HTTP_HOST]

            header("location: jeden-zak.php?id=$id");   //presmerovani stranky po uziti POST - relativni cesta
            // header("location: $url_protocol://" . $_SERVER["HTTP_HOST"] . "/jeden-zak.php?id=$id");   
            

            //http://localhost/jeden-zak.php?id=321

            //presmerovani stranky po uziti POST - relativni cesta
            // absolutni cesta - zadam presnou adresu noveho souboru, nove vznikle stranky
        } else {
            echo mysqli_stmt_error($statement);
        }
    }


    // $sql = "INSERT INTO student (first_name, second_name, age, life,     college)
    // VALUES ('" . mysqli_escape_string($connection, $_POST["first_name"]) . "','"
    //             . mysqli_escape_string($connection, $_POST["second_name"]) ."','"
    //             . mysqli_escape_string($connection, $_POST["age"]) . "','"
    //             . mysqli_escape_string($connection, $_POST["life"]) . "','"
    //             . mysqli_escape_string($connection, $_POST["college"]) . "')";

                // eskejpovani zabranuje sql injection utokum, kdy vlozeni odrazky zpusobi rozpad databaze-ale zpomaluje to nacitani stranky

    // $result = mysqli_query($connection, $sql);

    // if ($result === false) {
    //     echo mysqli_error($connection);
    // } else {
    //     $id = mysqli_insert_id($connection);
    //     echo "Úspěšně vložen žák s id $id";
    // }

    
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
    <?php require "assets/header.php"; ?>

    <main>
        <section class="add-form">
            <form action="pridat-zaka.php" method="POST">
                
                <input  type="text" 
                        name="first_name" 
                        placeholder="Křestní jméno" 
                        value="<?= htmlspecialchars($first_name) ?>"
                        required>
                <br>

                <input  type="text" 
                        name="second_name" 
                        placeholder="Příjmení" 
                        value="<?= htmlspecialchars($second_name) ?>"
                        required>
                <br>

                <input  type="number" 
                        name="age" 
                        placeholder="Věk" 
                        min="10" 
                        value="<?= htmlspecialchars($age) ?>"
                        required>
                <br>

                <textarea   name="life" 
                            placeholder="Podrobnosti o žákovi" 
                            required><?= htmlspecialchars($life) ?></textarea>
                <br>

                <input  type="text" 
                        name="college" 
                        plaaceholder="Kolej" 
                        value="<?= htmlspecialchars($college) ?>"
                        required>
                <br>

                <input  type="submit" 
                        value="Přidat">
                <br>

            </form>
        </section>
        
    </main>

    <?php require "assets/footer.php"; ?>
    
</body>
</html>