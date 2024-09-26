<?php

global $connection;
include "../connect.php";

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    header("Location: ../shop/shop.php");
}

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logowanie</title>
</head>
<body>

    <form action="" method="post">
        <label for="login">Login</label>
        <input type="text" name="login"><br>
        <label for="password">Hasło</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Zaloguj">
    </form>

<?php

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../login/index.php");
} else
if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    $array = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $array['id'];
        $_SESSION['login'] = $login;

        if ($array['is_admin'] == 1) {
            $_SESSION['is_admin'] = true;
        } else {
            $_SESSION['is_admin'] = false;
        }

        header("Location: ../shop/shop.php");

    } else {
        echo "Błędne dane logowania";
    }

}
?>

</body>
</html>

