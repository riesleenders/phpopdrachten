<?php
/**
 * User: Ries Leenders
 * Date: 20-2-2020
 * Time: 10:01
 * File: footer.php
 */
?>


<?php
    include("includes/variabelen.php");

    // De footer via echo getoond aan de gebruiker
    echo("<div class='footer'>");
    echo("&copy; $year ");
    echo("$name</div>");
?>

<?php

date_default_timezone_set("Europe/Amsterdam");
date($uur = "H");

if($uur = "12")
{ echo("Goedennacht"); }
else
{ }

if($uur = 6 or 7 or 8 or 9 or 10 or 11)
{ echo("Goedenochtend"); }
else
{ }

if($uur = 12 or 13 or 14 or 15 or 16 or 17)
{ echo("Goedenmiddag"); }
else
{ }

if($uur = 18 or 19 or 20 or 21 or 22 or 23)
{ echo("Goedenavond"); }
else
{ }

?>

