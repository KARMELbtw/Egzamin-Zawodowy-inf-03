<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <div id="lewy">
        <a href="index.html">GŁOWNA</a>
        <img src="1.jpg" alt="pokoje">
    </div>
    <div id="srodkowy"> 
        <a href="cennik.php">CENNIK</a>
        <table>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'wynajem');
            $sql = "SELECT * FROM `pokoje`;";
            $query = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_row($query)) {
                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>"."</tr>";
            }
            mysqli_close($connection);
        ?>
        </table>
        

    </div>
    <div id="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </div>
    <footer>
        <p>Stronę opracował: 1234567890</p>
    </footer>
</body>
</html>