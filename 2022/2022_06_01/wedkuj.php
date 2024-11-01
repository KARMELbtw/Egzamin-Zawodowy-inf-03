<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>

    <main>
        <div class="lewy">
            <div class="lewyGora">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "wedkowanie");

                    $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
                    $result = mysqli_query($connection, $sql);
                    
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<li>".$row[0]." pływa w rzece ".$row[1].", ".$row[2].",</li>";
                    }
                ?>
                </ol>
            </div>
            <div class="lewyDol">
                <h3>Ryby Drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                <?php
                    $sql = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1;";
                    $result = mysqli_query($connection, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
                    }
                    mysqli_close($connection);
                ?>
                </table>
            </div>
        </div>
        <div class="prawy">
            <img src="ryba1.jpg" alt="sum"><br>
            <a href="kwerendy.txt" download>Pobierz kwerendy</a>
        </div>
    </main>

    <footer>
        <p>Stronę wykonał: KARMELbtw</p>
    </footer>
</body>
</html>