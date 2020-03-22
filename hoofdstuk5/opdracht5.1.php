<?php
/**
 * User: Ries Leenders
 * Date: 22-3-2020
 * Time: 10:20
 * File: opdracht5.1.php
 */
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="UTF-8">
        <link href="/phpopdrachten/css/style.css" rel="stylesheet">
    </head>
<body>
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <section>
            <h2>Menu</h2>
            <ul>
                <li>Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="opdracht2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="opdracht2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <br>
                <li>Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk3/opdracht3.2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>
                <br>
                <li>Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="hoofdstuk4/opdracht4.1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht4.3.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>
                <br>
                <li>Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="hoofdstuk5/opdracht5.1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht5.2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht5.3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht5.4.php">Opdracht 5.4</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <br>
            <a href="/phpopdrachten/index.php">Terug</a>
        </section>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>

        <h1>
            RESTARIA KEES KROKET
        </h1>
        <br>
        <p>Visstraat 12<br>
            5211 DN 's-Hertogenbosch<br>
            073 613 6720<br>
            info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get" id="form1">
            <label for="bName">Bedrijfsnaam</label><br>
            <input type="text" id="bName" name="bName"><br>
            <label for="fName">Voornaam</label><br>
            <input type="text" id="fName" name="fName"><br>
            <label for="lName">Achternaam</label><br>
            <input type="text" id="lName" name="lName"><br>
            <label for="phone">Telefoon</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label for="email">E-mail</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="message">Bericht</label><br>
            <input type="text" id="message" name="message"><br>
            <input type="submit" value="Versturen" id="submit"><br>
        </form>
        <br>


<?php



?>