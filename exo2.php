<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 2</h1>
<p>Soit le tableau suivant :
$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<?php
$capitales = 
["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];

/**
 * afficherTableHTML
 *
 * @param  mixed $capitales['Pays'=>'Capital']
 * @return string HTML content
 */
function  afficherTableHTML(array $capitales):string{
    ksort($capitales);
    $retour = "<table class=\"table\"><tr> <th>Pays</th> <th>Capital</th> </tr>";
    foreach ($capitales as $Pays => $capitale) {
        $retour = $retour . "<tr><td>$Pays</td><td>$capitale</td></tr>";
    }
    $retour = $retour."</table>";
    return $retour;
}


echo afficherTableHTML($capitales);


?>



<?php
require "elements/footer.php";
?>