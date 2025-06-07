<?php

$connection = mysqli_connect("localhost", "root", "", "wedkarstwo");
$sql = "INSERT INTO `zawody_wedkarskie` VALUES (NULL,0,".$_POST["lowisko"].",'".$_POST["data"]."','".$_POST["sedzia"]."');";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);

?>