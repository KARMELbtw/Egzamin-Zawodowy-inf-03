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
    <title>Kontakt</title>
</head>
<body>

<form action="" method="post">
    <label for="topic">Temat</label><br>
    <input type="text" name="topic" required><br>
    <label for="message">Wiadomość</label><br>
    <textarea name="message"cols="30" rows="10" required></textarea><br>
    <label for="email">E-mail</label><br>
    <input type="text" name="email" required><br>
    <input type="submit" value="Wyślij">
</form>

<?php

if (isset($_POST['topic']) && isset($_POST['message']) && isset($_POST['email'])) {

    $topic = $_POST['topic'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $user_id = NULL;

    if ($_SESSION['logged']) {
        $user_id = $_SESSION['user_id'];
    }
    $sql = "INSERT INTO messages (topic, message, email, user_id) VALUES ('$topic', '$message', '$email', '$user_id')";
    $result = mysqli_query($connection, $sql);
    header("Location: ../shop/shop.php");

}
?>

<button onclick="window.history.back()">Powrót</button>

</body>
</html>
