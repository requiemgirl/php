<?php

if (!is_dir("uploads")) {
    mkdir("uploads");
}
$message = "";
// function addNewline($buffer) {
//     return $buffer . PHP_EOL;
// }

// ob_start('addNewline');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (isset($_POST["upload"])) {
        $fileName = $_FILES["obrazek"]["name"];
        $fileType = $_FILES["obrazek"]["type"];
        $fileSize = $_FILES["obrazek"]["size"];
        $fileTemp = $_FILES["obrazek"]["tmp_name"];

        // echo "Název souboru: " . $fileName;
        // echo "<br>";
        // echo "Typ souboru: " . $fileType;
        // echo "<br>";
        // echo "Velikost souboru: " . $fileSize;
        // echo "<br>";
        // echo "Dočasná cesta: " . $fileTemp;
        // echo "<br>";

        $allowedType = ["image/jpeg", "image/png"];
        $allowedSize = 2*1024*1024;

        if ($_FILES["obrazek"]["error"] == 4) {
            $message = "Nebyl vybrán žádný soubor.";

        } elseif (!in_array($fileType, $allowedType)) {
            $message = "Nepovolený soubor!";

        } elseif ($fileSize > $allowedSize) {
            $message = "Příliš velký soubor!";

        } else {
            $info = pathinfo($fileName);
            $name = $info["filename"];
            $ext = $info["extension"];
            $counter = 1;
            $targetPath = "uploads/" . $name . "." . $ext;

            while (file_exists($targetPath)) {
                $targetPath = "uploads/" . $name . "_" . $counter . "." . $ext;
                $counter++;
            }

            // echo $name;
            // echo "<br>";
            // echo $ext;

            if (move_uploaded_file($fileTemp, $targetPath)) {
                $message = "Soubor byl uložen.";

            } else {
                $message = "Chyba při ukládání souboru.";
            }
        }
    }
    
    if (isset($_POST["delete"])) {
        $fileToDelete = basename($_POST["file"]);
        $path = "uploads/" . $fileToDelete;

        if (file_exists($path)) {
            unlink($path);
            $message = "Soubor byl smazán.";
        } else {
            $message = "Soubor neexistuje.";
        }
    }
}
// ob_end_flush();
$files = scandir("uploads");
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
        <h1>Galerie obrázků</h1>
        <h2>Nahraj obrázek s koncovkou .jpg, .jpeg, nebo .png. Maximální povolená velikost je 2MB.</h2>
    </header>

    <main>
        <form action="cviceni_11_15.php" method="post" enctype="multipart/form-data">
            <label for="obrazek">Vyber obrázek:</label>
            <input type="file" name="obrazek" id="obrazek">
            <button type="submit" name="upload">Nahrát</button>
        </form>

        <div>
            <?php if (!empty($message)): ?>
                <?= $message ?>
            <?php endif ?>
        </div>
        
        <div>
            <?php foreach ($files as $file): ?>
                <?php if ($file != "." && $file !=".."): ?>
                    <div>
                        <img src="uploads/<?= htmlspecialchars($file) ?>" width="150"><br>
                        <?= htmlspecialchars($file) ?>
                        <form method="post">
                            <input type="hidden" name="file" value="<?= htmlspecialchars($file) ?>">
                            <button type="submit" name="delete">Smazat</button>
                        </form>
                    </div> 
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        


    </main>
</body>
</html>