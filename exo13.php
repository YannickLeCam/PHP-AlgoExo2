<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 13</h1>
<p>Comme nous l’avons vu à l’exercice précédent, les var_dump() vont nous servir à débugger. Mais 
l’affichage peut-être un peu chaotique. Afin de l’améliorer nous allons utiliser un outil bien 
pratique : Xdebug
Pour l'installation de Xdebug :
Laragon doit être démarré
Créer un fichier phpinfo.php dans lequel on appelle la méthode phpinfo();
exécuter le fichier phpinfo.php dans votre navigateur. La page vous affiche la configuration 
de votre version actuelle de PHP
CTRL + A / CTRL + C pour copier l'intégralité de la page de configuration
Se rendre sur XDebug Wizard : https://xdebug.org/wizard
Dans la zone de texte CTRL + V pour coller le texte précédemment copié</p>


<?php
require "elements/footer.php";
?>