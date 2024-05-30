<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>


<?php

function afficherRadio(array $elements):array{
    $tab = [];
    $echo = "<form> <label>Entrer votre civilité :</label>"; // Midifier le label en fonction des besoins
    $echo = $echo . "<div style=\"display:flex\">";
    foreach ($elements as $key => $option) {
        if ($key==0) {
            $html = <<<HTML
            <input class="form-check-input" type="radio" value=$option name="civil" checked>
            <label class="form-check-label">$option </label>
HTML;
        }else {
            $html = <<<HTML
            <input class="form-check-input" type="radio" value=$option name="civil">
            <label class="form-check-label">$option </label>
HTML;
        }

        $echo = $echo . $html;
        $tab[$option]=0; 
    }
    $echo=$echo . "</div><button type=\"submit\">Envoyer</button> </form>";
    echo $echo;
    return $tab;
}

    $elements = ["Madame","Mademoiselle","Monsieur","Autre"];
    $tabCivilité=afficherRadio($elements);

    if (isset($_GET['civil'])) {
        foreach ($tabCivilité as $key => $value) {
            
            if ($_GET['civil']== $key) {
                $tabCivilité[$key]+=1;
            }
        }
        echo "Var dump du tableau associatif voulue <br>";
        var_dump($tabCivilité);
    }

?>


<?php
require "elements/footer.php";
?>