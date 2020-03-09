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


$uur = date ('H');
$text = "";
if ($uur <5)
{
    $text = "Goedenacht";
}
elseif ($uur <=12)
{
    $text = "Goedemorgen";
}
elseif ($uur <=18)
{
    $text = "Goedemiddag";
}
elseif ($uur <=0)
{
    $text = "Goedeavond";
};

echo $text;


