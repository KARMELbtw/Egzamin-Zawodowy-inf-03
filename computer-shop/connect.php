<?php

$connection = mysqli_connect("localhost", "root", "", "shop");

if (!$connection) {
    echo "Błąd połączenia z bazą danych";
}

session_start();

?>
