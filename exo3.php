<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 3</h1>
<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir 
dans un nouvel onglet (_blank)</p>

<?php
    echo "<a href=\"https://elan-formation.fr/accueil\" target=\"_blank\">Elan Formation</a>";
?>

<?php
require "elements/footer.php";
?>