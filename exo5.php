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

<form action="" method="post">
    <div class="form-group">
        <div class="mb-3">
            <label for="" class="form-label">Entrer votre nom :</label>
            <input type="text"class="form-control" name="name" id="" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Entrer votre prénom :</label>
            <input type="text"class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Entrer votre ville :</label>
            <input type="text"class="form-control" name="city" id="" aria-describedby="helpId" placeholder=""/>
        </div>

        <button type="submit" class="btn btn-primary"> Envoyer </button>
    </div>
    
</form>

<?php

    if (isset($_POST['name']) & isset($_POST['firstname']) & isset($_POST['city'])) {
        
    }


?>



<?php
require "elements/footer.php";
?>