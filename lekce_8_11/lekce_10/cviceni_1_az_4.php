<?php
session_start();

$_SESSION["jmeno"] = "Alexandra";

if (isset($_GET["zmena"])) {
    $_SESSION["jmeno"] = "Karel";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $_SESSION["jmeno"]; ?></p>
    <a href="?zmena=1">Změnit jméno</a>
</body>
</html>