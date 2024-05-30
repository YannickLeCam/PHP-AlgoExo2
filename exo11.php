<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>



<?php
    function formaterDateFr(string $date):string {

        $fmt = new IntlDateFormatter("fr_FR", IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN);

        $date_array=explode("-",$date); //0=>yyyy , 1=>mm , 2=>dd
        $date = new DateTime();
        $date->setDate($date_array[0],$date_array[1],$date_array[2]);  

        return datefmt_format($fmt , $date);
    }

    echo 'Pour le format "2018-02-23" cela nous donne : '.formaterDateFr("2018-02-23") . "<br>";
    echo 'Pour le format "2024-04-21" cela nous donne : '.formaterDateFr("2024-04-21") . "<br>";
?>


<?php
require "elements/footer.php";
?>