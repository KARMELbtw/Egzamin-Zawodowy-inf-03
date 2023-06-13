<!DOCTYPE html>
<html lang="pl">

<head>
    <title>MOD DATABASE</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style id="style"></style>
</head>

<body>
    <div class="mainContainer">
        <div class="top">
            <div class="h1" onclick="empty()">
                <h1>// WARFRAME MOD DATABASE //</h1>
            </div>
            <div class="squares" id="squares">
                <div class="sqr1">
                    <p class="paragraf">MODS</p>
                </div>
                <div class="sqr2">
                    <p class="paragraf">ARCANES</p>
                </div>
                <div class="sqr3">
                    <p class="paragraf">ADD</p>
                </div>
                <div class="sqr4">
                    <p class="paragraf">BUILD</p>
                </div>
                <div class="sqr5" onclick="login()">
                    <p class="paragraf">LOGIN</p>
                </div>
            </div>
            <hr class="vertical">
            <div class="accInfo" id="pfpbox">
                <p class="accPfp" id="pfp">?</p>
            </div>
        </div>
        <div class="horizantals">
            <hr class="line1">
            <hr class="line2">
            <hr class="line3">
            <hr class="line4">
            <hr class="line5">
            <hr class="line6">
        </div>
        <div id="root">
            <!-- <article>MOD DATABASE ver. 1.05</article> -->
            <!-- <div class="arcaneSearchBox">
                <div class="arcaneList">
                    <h3>ARCANE TYPES</h3>
                    <ul>
                        <li>WARFRAME</li>
                        <li>PRIMARY</li>
                        <li>SECONDARY</li>
                        <li>OPERATOR</li>
                        <li>AMP</li>
                        <li>KITGUN</li>
                        <li>ZAW</li>    
                    </ul>
                    <form action="arcaneSearch.php">
                        <input type="text" placeholder="NAME">
                        <input type="text" placeholder="RANK">
                </form>
                </div>
                <div class="arcaneSearchResult">

                </div>
            </div> -->
            <div class="add">
                <form method="post">
                    <input type="text" placeholder="NAME" required><br>
                    <input type="text" placeholder="DESCRIPTION" required><br>
                    <input list="damage" placeholder="DAMAGE TYPE"><br>
                    <datalist id="damage">
                        <option>IMPACT</option>
                        <option>PUNCTURE</option>
                        <option>SLASH</option>
                        <option>COLD</option>
                        <option>ELECTRICITY</option>
                        <option>HEAT</option>
                        <option>TOXIN</option>
                        <option>BLAST</option>
                        <option>CORROSIVE</option>
                        <option>GAS</option>
                        <option>MAGNETIC</option>
                        <option>RADIATON</option>
                        <option>VIRAL</option>
                        <option>VOID</option>
                    </datalist>
                    <input type="number" placeholder="RANK" max="5" min="0">
                    <input type="checkbox" placeholder="MAX RANK" required><div class="max"> MAX</div><br>
                    <input type="text" placeholder="IMAGE LINK" required><br>
                    <input type="submit">
                    <input type="reset">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>