<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</p>


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
    $retour = "<table class=\"table\"><tr> <th>Pays</th> <th>Capital</th> <th>Lien</th> </tr>";
    foreach ($capitales as $Pays => $capitale) {
        $retour = $retour . "<tr><td>$Pays</td><td>$capitale</td><td><a href=\"https://fr.wikipedia.org/wiki/$capitale\" target=\"_blank\">Lien</a></td></tr>";
    }
    $retour = $retour."</table>";
    return $retour;
}

echo afficherTableHTML($capitales);



?>



<?php
require "elements/footer.php";
?>