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

<form action="" method="get" class="container">
    <div class="mb-3">
        <label for="name" class="form-label">Entrer votre nom :</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">Entrer votre prénom :</label>
        <input type="text" name="firstname" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Entrer votre adresse mail :</label>
        <input type="email" name="mail" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">Entrer votre ville :</label>
        <input type="text" name="city" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="sexe" class="form-label">Quel est votre sexe biologique :</label>
        <select name="sexe" class="form-select" required>
            <option value="F">Femme</option>
            <option value="H">Homme</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="poste" class="form-label">Quel poste occupez-vous actuellement :</label>
        <select name="poste" class="form-select" required>
            <option value="Développeur Logiciel">Développeur Logiciel</option>
            <option value="Designer web">Designer web</option>
            <option value="Intégrateur">Intégrateur</option>
            <option value="Chef de projet">Chef de projet</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>



<?php

    if (isset($_GET['name']) & isset($_GET['firstname']) & isset($_GET['mail']) & isset($_GET['city']) & isset($_GET['sexe']) & isset($_GET['poste'])) {
        $name = htmlentities($_GET['name']);
        $firstname = htmlentities($_GET['firstname']);
        $mail = htmlentities($_GET['mail']);
        $city = htmlentities($_GET['city']);
        $sexe = htmlentities($_GET['sexe']);
        $poste = htmlentities($_GET['poste']);
        echo "Bonjour $name $firstname de sexe $sexe, étant à $city et on peut vous contacter sur $mail, vous occupez le poste de $poste ";
    }

?>
<?php
require "elements/footer.php";
?>