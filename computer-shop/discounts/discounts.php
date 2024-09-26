<?php

global $connection;
include "../connect.php";

?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promocje</title>
</head>
<body>

<?php

$sql = "SELECT * FROM products where on_discount > 0";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo $row['id'];
    echo $row['name'];
    echo $row['description'];
    $gallery = explode("|", $row['image_link']);
    echo "<img src='".$gallery[0]."'>";
    if ($row['discount'] > 0) {
        echo "<p style='text-decoration: line-through'>".$row['price']."</p>zł".$row['price'] - ($row['price'] * $row['discount'] / 100)."zł";
    } else {
        echo $row['price']."zł";
    }
}

?>

<button onclick="window.history.back()">Powrót</button>

</body>
</html>
