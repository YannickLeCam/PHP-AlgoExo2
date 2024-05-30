<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 8
</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. <br>
Exemple : <br>
repeterImage($url,4)</p> <br>

<?php

    function repeterImage(string $image,int $nbRep,string $style="display:flex;flex-flow: row wrap;gap:20px; justify-content: space-between;"):string {
        $html = "<div style=\"$style\" >";
        for ($i=0; $i < $nbRep; $i++) { 
            $html = $html . "<img src=$image>" ;
        }
        $html = $html . "</div>";
        return $html;
    }
    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    echo repeterImage($url,10);


?>
<?php
require "elements/footer.php";
?>