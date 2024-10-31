<?php
$connection = mysqli_connect('localhost', 'root', '', 'baza');

$data = $_POST['data'];
$ileOsob = $_POST['ileOsob'];
$telefon = $_POST['telefon'];

$sql = "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('".$data."','".$ileOsob."','".$telefon."');";
mysqli_query($connection, $sql);

mysqli_close($connection);

echo "Dodano rezerwację do bazy";

?>