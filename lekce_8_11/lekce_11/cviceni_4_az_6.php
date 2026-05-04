<?php

if (!is_dir("uploads")) {
    mkdir("uploads");
}

$files = scandir("uploads");

echo "<p>" . implode(", ", $files) . "</p>";

// echo "<pre>";
// print_r($files); ------- pouze s printem to bylo osklive :D
// echo "<pre>";

$file = fopen("uploads/data.txt", "r");

while (!feof($file)) {
    echo nl2br(fgets($file));
}

fclose($file);