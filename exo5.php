<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);</p>



<?php
    
    /**
     * createInput va créer un Input type Texte avec le Label en string en HTML et le name de l'input avec le nom fournit en appellant la fonction
     *
     * @param  mixed $nameInput
     * @return string
     */
    function createInput(string $nameInput):string{
        return <<<HTML
            <div class="mb-3">
                <label for="" class="form-label">Entrer votre $nameInput :</label>
                <input type="text"class="form-control" name=$nameInput id="" aria-describedby="helpId" placeholder=""/>
            </div>
HTML;
    }


    /**
     * createSubmitButton va créer un Button type Submit en string en HTML
     *
     * @return void
     */
    function createSubmitButton(){
        return '<button type="submit" class="btn btn-primary"> Envoyer </button>';
    }
    
    /**
     * createForm transmet un form en html
     *
     * @return void
     */
    function createForm(){
        $retour = '<form action="" method="post"><div class="form-group">';
        $tabInputTextName = ["name","firstname","city"];
        foreach ($tabInputTextName as $name) {
            $retour .=createInput($name);
        }
        $retour .=createSubmitButton();
        $retour .= '</div></form>';
        echo $retour;
    }


    function afficherInput($name,$firstname,$city){
        return "Bonjour $name ... $firstname $name ... Votre mission c'est bien passé à $city ?";
    }

    

    createForm();



    if (isset($_POST['name']) & isset($_POST['firstname']) & isset($_POST['city'])) {
        $name=htmlentities($_POST['name']);
        $firstname=htmlentities($_POST['firstname']);
        $city=htmlentities($_POST['city']);


        echo afficherInput($name,$firstname,$city);
    }


?>



<?php
require "elements/footer.php";
?>