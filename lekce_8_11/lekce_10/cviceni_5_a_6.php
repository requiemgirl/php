<?php
session_start();

// inicializace - kdyz jsem nechala jenom session s hdntou, tak unset nefungoval. 
if (!isset($_SESSION["jmeno"])) { 
    $_SESSION["jmeno"] = "Alexandra";
}

// unset -> smaže jen hodnotu
if (isset($_GET["unset"])) {
    unset($_SESSION["jmeno"]);
}

// destroy -> smaže celou session
if (isset($_GET["destroy"])) {
    session_destroy();
    //header("Location: " . $_SERVER["PHP_SELF"]); - 
    exit;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Session životní cyklus</title>
</head>
<body>
    <h1>Cvičení 5. a 6. - Změna session a její zničení</h1>
    <p><?php
    if (isset($_SESSION["jmeno"])) {
        echo $_SESSION["jmeno"];
    } else {
        echo "Žádné jméno v session";
    }
    ?></p>

<a href="?unset=1">unset (smaž hodnotu)</a><br>
<a href="?destroy=1">destroy (znič session)</a>

</body>
</html>