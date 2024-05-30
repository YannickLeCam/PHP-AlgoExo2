<?php
require "elements/header.php";
require "elements/nav.php";
?>
<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement  <br>
de validation (submit).</p>




<?php
    /**
     * alimenterListeDeroulante
     *
     * @param  array[mixed] $elements peut etre tout type "primaire"
     * @return array prompt une liste déroulante avec CSS BS5
     */
    function alimenterListeDeroulante(array $elements,string $titre ):array{
        sort($elements);
        $tab = [];
        $echo = "<label>Entrer votre $titre :</label>"; // Midifier le label en fonction des besoins
        $echo = $echo . "<select class=\"form-control\" name=$titre id=\"exampleFormControlSelect1\">";
        foreach ($elements as $option) {
            $echo = $echo . "<option>$option</option>";
            $tab[$option]=0;
        }
        $echo=$echo . "</select>";
        echo $echo;
        return $tab;
    }
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
     * @return void
     */
    function createSubmitButton(){
        return '<button type="submit" class="btn btn-primary"> Envoyer </button>';
    }
    /**
     * createForm transmet un form en html
     *
     * @return array sera un tableau regroupant tout les tableau associatif pour récupérer les données voulue
     */
    function createForm():array{
        $tab=[];
        echo '<form action="" method="get" class="container"><div class="form-group">';
        echo createInput("name","nom");
        echo createInput("firstname","prénom");
        echo createInput("city","ville");
        echo createInput("mail","adresse mail");
        $tab[]=alimenterListeDeroulante(["Monsieur","Madame","Mademoiselle","Autre"],"civilité");
        $tab[]=alimenterListeDeroulante(["Développeur Logiciel","Designer web","Intégrateur","Chef de projet"],"poste");
        echo createSubmitButton();
        echo'</div></form>';
        return $tab;

    }


    $tabAssiociatif=createForm();



    if (isset($_GET['name']) & isset($_GET['firstname']) & isset($_GET['mail']) & isset($_GET['city']) & isset($_GET['civilité']) & isset($_GET['poste'])) {
        $name = htmlentities($_GET['name']);
        $firstname = htmlentities($_GET['firstname']);
        $mail = htmlentities($_GET['mail']);
        $city = htmlentities($_GET['city']);
        $sexe = htmlentities($_GET['civilité']);
        $poste = htmlentities($_GET['poste']);
        echo "Bonjour $name $firstname de sexe $sexe, étant à $city et on peut vous contacter sur $mail, vous occupez le poste de $poste <br>";
        echo "Var_dump du tableau de createForm <br>";
        var_dump($tabAssiociatif);
    }

?>
<?php
require "elements/footer.php";
?>