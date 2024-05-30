<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>


<?php   
   /**
    * genererCheckbox
    *
    * @param  mixed $elements peut etre tout type "primaire"
    * @return array prompt  avec CSS BS5
    */
   function genererCheckbox(array $elements):array{
    sort($elements);
    $tab = [];
    $echo = "<form> <label>Entrer vos Elements :</label>"; // Midifier le label en fonction des besoins
    $echo = $echo . "<div style=\"display:flex\">";
    foreach ($elements as $option) {
        $html = <<<HTML
        <input class="form-check-input" type="checkbox" value=1 name="$option">
        <label class="form-check-label" for="defaultCheck1">$option </label>
HTML;
        $echo = $echo . $html;
        $tab[$option]=0; 
    }
    $echo=$echo . "</div><button type=\"submit\">Envoyer</button> </form>";
    echo $echo;
    return $tab;
}

$elements = ["Element 1","Element 2","Element 3"];
$tab=genererCheckbox($elements);

foreach ($tab as $option => $value) {
    if (isset($_GET[str_replace(" ","_",$option)])) { // Le $_GET fait une sort de slug qui va combler les espaces par des underscores pour retrouver les valeurs 
        $tab[$option]+=1;
    }
}

echo "Var_dump du tableau associatif : <br>";
var_dump($tab);

?>

<?php
require "elements/footer.php";
?>