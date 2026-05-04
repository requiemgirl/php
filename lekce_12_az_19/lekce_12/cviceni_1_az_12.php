<?php

    $host = "127.0.0.1";
    $user = "root";
    $pass = "";

    $conn1 = mysqli_connect($host, $user, $pass);
    // echo "pripojeno";

    $sql = "CREATE DATABASE IF NOT EXISTS skola_php";
    mysqli_query($conn1, $sql);

    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "skola_php";

    $conn2 = mysqli_connect($host, $user, $pass, $db);

    if (!$conn2) {
        die("Chyba připojení: " . mysqli_connect_error());
    }
        //  else {
    //     echo "připojeno";
    // }

    mysqli_set_charset($conn2, "utf8");

    $sqlCRE = "CREATE TABLE IF NOT EXISTS studenti (
        id INT AUTO_INCREMENT PRIMARY KEY,
        jmeno VARCHAR(50),
        prijmeni VARCHAR(50),
        rocnik INT
    )";

    mysqli_query($conn2, $sqlCRE);

    $editStudent = null;

    if (isset($_GET["edit"])) {
        $id = $_GET["edit"];

        $editResult = mysqli_query($conn2, "SELECT * FROM studenti WHERE id = $id");
        $editStudent = mysqli_fetch_assoc($editResult);

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }

    $deleteStudent = null;

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];

        $deleteStudent = "DELETE FROM studenti WHERE id = $id";
        mysqli_query($conn2, $deleteStudent);

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $jmeno = htmlspecialchars($_POST["jmeno"]);
        $prijmeni = htmlspecialchars($_POST["prijmeni"]);
        $rocnik = intval($_POST["rocnik"]);

        if (!empty($jmeno) && !empty($prijmeni) && !empty($_POST["rocnik"])) {
            if (!empty($_POST["id"])) {
            $id = $_POST["id"];

            $updateStudent = "
                UPDATE studenti
                SET jmeno='$jmeno', prijmeni='$prijmeni', rocnik='$rocnik'
                WHERE id=$id
            ";

            mysqli_query($conn2, $updateStudent);

            } else {

                $addStudent = "
                INSERT INTO studenti (jmeno, prijmeni, rocnik) 
                VALUES ('$jmeno', '$prijmeni', '$rocnik')
                ";
                mysqli_query($conn2, $addStudent);
            }
        }
        
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }
    $countResult = mysqli_query($conn2, "SELECT COUNT(*) AS pocet FROM studenti");
    $countRow = mysqli_fetch_assoc($countResult);

    $studentsResult = mysqli_query($conn2, "SELECT * FROM studenti");
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Cvičení 1 až 12</h1>
    </header>

    <main>

        <p>Počet studentů: <?php echo $countRow['pocet']; ?></p>

        <form method="post">
            <label for="jmeno">Jméno: </label>
            <input type="text" name="jmeno" required>

            <label for="prijmeni">Příjmení: </label>
            <input type="text" name="prijmeni" required>

            <label for="rocnik">Ročník: </label>
            <input type="number" name="rocnik" id="rocnik" required min="1" max="4">
            <input type="submit" value="Přidat">
        </form>

        <?php if ($editStudent): ?>
            <h2>Úprava studenta</h2>

            <form method="post">
                <input type="hidden" name="id" value="<?php echo $editStudent['id']; ?>">

                <label>Jméno:</label>
                <input type="text" name="jmeno" value="<?php echo $editStudent['jmeno']; ?>" required>

                <label for="prijmeni">Příjmení: </label>
                <input type="text" name="prijmeni" value="<?php echo $editStudent['prijmeni']; ?>" required>

                <label for="rocnik">Ročník: </label>
                <input type="number" name="rocnik" value="<?php echo $editStudent['rocnik']; ?>" required min="1" max="4">

                <button type="submit">Uložit změny</button>
            </form>

            <?php endif; ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Jméno</th>
                <th>Příjmení</th>
                <th>Ročník</th>
                <th>Update/Delete</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($studentsResult)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['jmeno']); ?></td>
                    <td><?php echo htmlspecialchars($row['prijmeni']); ?></td>
                    <td><?php echo htmlspecialchars ($row['rocnik']); ?></td>
                    <td><a href="?edit=<?php echo $row['id']; ?>">Upravit</a></td>
                    <td><a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Opravdu chceš tohoto studenta smazat?')">Smazat</a></td>
                </tr>
            <?php endwhile; ?>

        </table>

    </main>
</body>
</html>