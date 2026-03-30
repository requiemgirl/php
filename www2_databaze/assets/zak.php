<?php
/**
 * Získá jednoho žáka z databáze podle ID
 * 
 * @param object $connection - napojení na databázi
 * @param integer $id - id jednoho konkrétního žáka
 * 
 * @return mixed asociativní pole, které obsahuje info o žákovi nebo vrátí nulll, pokud žák nebyl nalezen
 */
function getStudent($connection, $id) {
    $sql = "SELECT *
            FROM student
            WHERE id = ?";
            
    $start = mysqli_prepare($connection, $sql);

    if ($start === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_start_bind_param($stmt, "i", $id);

        if(mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}