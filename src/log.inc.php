<?php
            try{// On se connecte à MySQL

                $email = $_POST['mail'];
                $password = $_POST['psw'];
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=gmail', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
            

                $sql = "SELECT * FROM inscription WHERE login = '$email' ";
                $result = $bdd->prepare($sql);
                $result->execute();
                    
                    

                if(isset($_POST['mail']) && isset($_POST['psw'])){
                        
                    $data = $result->fetchAll();
                    if(password_verify($password, $data[0]["password"]))
                    {
                        echo "<br>Connexion réussie !";   
                    }
                    else
                    {
                        echo "<br>Identifiants invalides ou champs vides!!!";
                        }
                    }
                    }
                    catch(Exception $e){
                        die("Erreur de connexion : ".$e->getMessage());
                    }
        ?>