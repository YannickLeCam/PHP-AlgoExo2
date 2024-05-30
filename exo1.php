<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>


<form action="" method="get">
    <label for="texte">Entrer du texte :</label>
    <input type="text" name="texte" id="">
    <button type="submit">Envoyer</button>
</form>


<?php

/**
 * convertirMajRouge
 *
 * @param  string $texte
 * @return string HTML content
 */
function convertirMajRouge(string $texte):string{
    return "<p style=\"color:red\">".strtoupper(htmlentities($texte))."</p>";
}

if (isset($_GET['texte'])) {
    echo convertirMajRouge($_GET['texte']);
}

?>
<?php
require "elements/footer.php";
?>