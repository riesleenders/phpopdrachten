<body>
<?php
    // Variabelen:
    // - Strings
    // - Integer / Number
    // - Boolean

    $firstName = "Ries";
    $lastName = "Leenders";

    $fullName = $firstName . " " . $lastName;

    // integer / numbers
    $yearOfBirth = 2003;
    $currentYear = date("Y");
    $age = $currentYear - $yearOfBirth;

    // Boolean
    $fromMaaskantje = false;
    $isMale = true;

    if( $fromMaaskantje == true )
    {
        if( $isMale == true)
        {
            echo("<p>Ze'de gij d'r ene van hier of wa?</p>");
        }
        else
        {
            echo("<p>ga'de gij nog patat bakke of wa?</p>");
        }
    }

    // echo commando
    echo("<p>Hallo</p>");

    // echo commando als terminal manier
    echo "<p>Dit is een echo commando</p>";
?>

<div>
    <?php
        echo("<h1>Hallo " . $fullName);
        echo("<h2>" . $fullName . " is vandaag " . $age . " jaar oud.</h2>");
    ?>
</div>

</body>
