<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1> Exercice 14</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>


<?php
    /**
     * createInput va créer un Input type Texte avec le Label en string en HTML et le name de l'input avec le nom fournit en appellant la fonction
     *
     * @param  string $nameInput
     * @param  string $label si vide alors = nameInput
     * @return string
     */
    function createInput(string $nameInput,string $label=null):string{
        if($label==null){
            $label=$nameInput;
        }
        return <<<HTML
            <div class="mb-3">
                <label for="" class="form-label">Entrer votre $label :</label>
                <input type="text"class="form-control" name=$nameInput id="" aria-describedby="helpId" placeholder=""/>
            </div>
HTML;
    }    

        /**
     * createSubmitButton va créer un Button type Submit en string en HTML
     *
     * @return string Html
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
        $retour = '<form action="" method="get"><div class="form-group">';
        $retour .=createInput("mail","adresse mail");
        $retour .=createSubmitButton();
        $retour .= '</div></form>';
        echo $retour;
    }
    createForm();

    if (isset($_GET["mail"])) {
        if (filter_var($_GET['mail'],FILTER_VALIDATE_EMAIL)) {
            echo "l'email " . htmlentities($_GET["mail"]) . " est une adresse valide !";
        }else {
            echo "l'email " . htmlentities($_GET["mail"]) . " n'est pas une adresse valide !";
        }
    }
?>

<?php
require "elements/footer.php";
?>