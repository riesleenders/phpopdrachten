<?php
/**
 * User: Ries Leenders
 * Date: 22-3-2020
 * Time: 11:00
 * File: opdracht5.2.php
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
            Uitschrijfformulier KW1C
        </h1>
    <table>
    <tr>
        <td><label for="fLName">Voor en achternaam</label></td>
        <td><input type="text" id="fLName" name="fLName"></td>
    </tr>
    <tr>
        <td><label for="sNumber">Studentnummer</label></td>
        <td><input type="text" id="sNumber" name="sNumber"></td>
    </tr>
    <tr>
        <td><label for="why">Datum van uitschrijving</label></td>
        <td><input type="text" id="why" name="why"></td>
    </tr>
    <tr>
        <td>
            <label for="why">Reden van uitschrijving</label><br>
        </td>
        <td>
            <select>
                <option value="Te slechte resultaten">Te slechte resultaten</option>
                <option value="Ik wordt gepest">Ik wordt gepest</option>
                <option value="Ik snap er niets van">Ik snap er niets van</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="year">Leerjaar</label><br>
        </td>
        <td>
            <input type="radio" name="gender" value="1e leerjaar"> 1e leerjaar<br>
            <input type="radio" name="gender" value="2e leerjaar"> 2e leerjaar<br>
            <input type="radio" name="gender" value="3e leerjaar"> 3e leerjaar<br>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" id="successClass" name="successClass" value="Ik wil me aanmelden bij de successklas.">
            <label for="successClass">Ik wil me aanmelden bij de successklas</label><br>
            <input type="checkbox" id="deleteData" name="deleteData" value="Verwijder mijn gegevens uit het systeem.">
            <label for="deleteData">Verwijder mijn gegevens uit het systeem</label><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="deleteData">Schrijf hieronder de reden van je uitschrijving op</label><br>
            <input type="text" id="tBWhy" name="tBWhy" width="1000" height="500">
        </td>
    </tr>




    <tr>
        <td>
            <input type="submit" value="Versturen" id="submit">
        </td>
    </tr>
<?php



?>