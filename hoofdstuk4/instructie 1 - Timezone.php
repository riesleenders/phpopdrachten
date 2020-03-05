<?php
/**
 * User: Ries Leenders
 * Date: 3-3-2020
 * Time: 8:42
 * File: instructie H4 - 1.php
 */
?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

<?php
    // Instructie 1 Hoofdstuk 4

    // Vertellen dat ons script de tijdzones van Hong Kong moet aanhouden.
    date_default_timezone_set("Asia/Hong_Kong");

    // Toon de tijd in HH:MM formaat
    $currentDate = date("D d m Y H:i:s");
    echo("<p>Huidige Tijd: " . $currentDate . "</p>");

    // Oefening 2: switch
    $currentHour = date("D");
    $name = "Ries";

    switch($currentHour)
    {
        case "Mon":
            echo("Vandaag is het de eerste dag van de week.");
            break;
        case "Tue":
            echo("Vandaag is het de tweede dag van de week.");
            break;
        case "Wed":
            echo("Vandaag is het de derde dag van de week.");
            break;
        case "Thu":
            echo("Vandaag is het de vierde dag van de week.");
            break;
        case "Fri":
            echo("Vandaag is het de vijfde dag van de week.");
            break;
        case "Sat":
            echo("Vandaag is het de zesde dag van de week.");
                if($name == "Ries")
                {
                    echo("Vandaag week lekker werken en geld verdienen.");
                }
                else
                {
                    echo("Slaap maar lekker uit.");
                }
            break;
        case "Sun":
            echo("Vandaag is het de zevende en laatste dag van de week.");
            break;
    }
?>




</body>
</html>