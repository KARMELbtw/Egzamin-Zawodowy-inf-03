<?php

global $connection;
include "../connect.php";

if (!isset($_GET['search'])) {
    $query = "%";
} else {
    $query = $_GET['search'];
}

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM `products` WHERE description LIKE '%$query%' AND category_id LIKE '$category'";
} else {
    $category = $_GET['subcategory'];
    $sql = "SELECT * FROM `products` WHERE description LIKE '%$query%' AND subcategory_id LIKE '$category'";
}

$result = mysqli_query($connection, $sql);

$shown = false;

while ($row = mysqli_fetch_assoc($result)) {

    $shown = true;

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
    echo "<br>".$category;
}

if (!$shown) {
    echo "Brak wyników";
}

?>

<button onclick="window.history.back()">Powrót</button>

</body>
</html>


