<?php
try { // On se connecte à MySQL
    if (isset($_POST['mail']) && isset($_POST['psw'])) {
        $email = $_POST['mail'];
        $password = $_POST['psw'];
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=gmail', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));
        $sql = "SELECT * FROM account WHERE login = '$email' ";
        $result = $bdd->prepare($sql);
        $result->execute();
        $data = $result->fetchAll();
        if ($data) {
            if (password_verify($password, $data[0]["password"])) {
                echo "<p class=\"ok\">Connexion réussie !</p>";
            } else {
                echo "<p class=\"notok\">Mot de passe invalide</p>";
            }
        } else
            echo "<p class=\"notok\">Identifiant invalide</p>";
    }
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>