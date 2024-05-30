<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<?php
    $tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

    for ($i=0; $i < count($tableauValeurs); $i++) { 
        var_dump($tableauValeurs[$i]);
        echo "<br>";
    }


?>


<?php
require "elements/footer.php";
?>