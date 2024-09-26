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
    <link rel="stylesheet" href="shop.css">

<!--Bootsrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PC master - Sklep komputerowy</title>
</head>
<body>
    <div class="top-bar">

        <div class="logo">

        </div>

        <div class="searchbar">

            <form action="../search/search-result.php" method="get">
                <input type="search" name="search">
                <select name="category">
                    <option value="%">Wszystkie kategorie</option>

                    <?php
                    
                        $sql = "SELECT * FROM categories where 1";
                        $result = mysqli_query($connection, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                        }

                    ?>

                </select>
                <input type="submit" value="Szukaj">
            </form>

        </div>

        <div class="contact">

            <a href="../contact/contact.php">Kontakt</a>

        </div>

        <div class="user">

            <?php

            if (!isset($_SESSION['login'])) {
                echo "<a href='../login/index.php'><button>Zaloguj</button></a>";
            } else {
                echo "Login: " . $_SESSION['login'];
                echo "<br>
                        <form action='../login/index.php' method='post'>
                        <input type='checkbox' style='display: none;' readonly checked name=logout>
                        <input type='submit' value='Wyloguj'>
                       </form>";

            }


            if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
                echo "<br>Panel Administratora";
            }

            ?>


        </div>

        <div class="cart">
            <a href="../cart/cart.php">Koszyk</a>
        </div>

    </div>

    <div class="navigation-bar">

        <div class="categories-drop-bar" id="categoriesDropBar">

            <div class="categories-btn" id="categoriesBtn">Kategorie</div>

            <?php

            $sql = "SELECT * FROM categories where 1";
            $result = mysqli_query($connection, $sql);

            echo "<div class='categories-list' id='categoriesList'>";

            echo "<div class='category'>";

            while ($row = mysqli_fetch_assoc($result)) {

                echo "<form action='../search/search-result.php' method='get'>
                        <input type='checkbox' style='display: none' readonly checked name='category' value='" . $row['id'] . "'>
                        <input type='submit' value='" . $row['name'] . "'>
                      </form>

                ";

                $sql = "SELECT * FROM subcategories where category_id = " . $row['id'];
                $result2 = mysqli_query($connection, $sql);

                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo "<li>
                            <form action='../search/search-result.php' method='get' style='display: inline'>
                                <input type='checkbox' style='display: none' readonly checked name='subcategory' value='" . $row2['id'] . "'>
                                <input type='submit' value='" . $row2['name'] . "'>
                             </form>
                          </li>";
                }

            }

            echo "</div></div>";


            ?>

        </div>

        <div class="discounts">
                <a href="../discounts/discounts.php">Promocje</a>
        </div>

        <div class="outlet">

        </div>

    </div>

    <main>

        <div class="gallery">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php

                        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 10";
                        $result = mysqli_query($connection, $sql);



                        while ($row = mysqli_fetch_assoc($result)) {
                            $url = explode("|", $row['image_link']);


                            echo "<div class='carousel-item'>
                                <img class='d-block w-100' src='".$url[0]."' alt='image slide'>
                               </div>";
                        }


                        ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images.morele.net/i1064/13129641_1_i1064.jpg" alt="First slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>

        <div class="newly-added">

        </div>

        <div class="featured-1">

        </div>

        <div class="featured-2">

        </div>

        <div class="featured-3">

        </div>

        <div class="featured-4">

        </div>

    </main>

    <script src="shop.js"></script>

    <!--Bootsrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<?php
