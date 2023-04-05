<?php

try {
    $_bdd = new PDO('mysql:host=localhost;dbname=gmail;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//tester nos variables
if (isset($_POST['mail']) || isset($_POST['psw'])) {
    $_email = $_POST["mail"];

    //on test les chaines de caractère//
    if (!$_POST['mail'] || !$_POST['psw']) {
        echo "<p class=\"notok\">Vous avez oubliez votre mail ou password?</p>";
    } else if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) { //attention à ma fonction
        echo "<p class=\"notok\">Mail invalide</p>";
    } else if (is_numeric($_email)) {
        echo "<p class=\"notok\">Vous devez saisir des caractères</p>";
    } else {

        // password_hash($_POST['psw'],PASSWORD_DEFAULT);

        $req = $_bdd->prepare('INSERT INTO account (login, password)VALUES(?,?)');
        $req->execute(array($_POST['mail'], password_hash($_POST['psw'], PASSWORD_DEFAULT)));

        echo "<p class=\"ok\">Merci votre contenu est ajouté : 
                <a href=\"connexion.php\" title=\"pub\">Connectez vous</a>
                
        </p>";

    }

}

?>