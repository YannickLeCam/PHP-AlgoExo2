<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);</p>

<?php    
    /**
     * alimenterListeDeroulante
     *
     * @param  array[mixed] $elements peut etre tout type "primaire"
     * @return array prompt une liste déroulante avec CSS BS5
     */
    function alimenterListeDeroulante(array $elements):array{
        sort($elements);
        $tab = [];
        $echo = "<form> <label>Entrer votre Civilité :</label>"; // Midifier le label en fonction des besoins
        $echo = $echo . "<select class=\"form-control\" name=\"civil\" id=\"exampleFormControlSelect1\">";
        foreach ($elements as $option) {
            $echo = $echo . "<option>$option</option>";
            $tab[$option]=0;
        }
        $echo=$echo . "</select><button type=\"submit\">Envoyer</button> </form>";
        echo $echo;
        return $tab;
    }

    $elements = ["Madame","Mademoiselle","Monsieur","Autre"];
    $tabCivilité=alimenterListeDeroulante($elements);
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