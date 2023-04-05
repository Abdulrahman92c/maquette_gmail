<?php
    session_start();
    include_once("./src/connexion.inc.php");
?>
<?php
include_once "./src/head.inc.php"
?>
<body>
    <header>
        <nav>
        <h1><img src="./asset/mail.png" alt="Logo gmail" loading="lazy">Gmail</h1>
           
        <ul>
           
            <li><a href="#">Pour les Pros</a></li>
            <li><a href="./connexion.php">Connexion</a></li>
            <li><a href="#create_account">Créer un compte</a></li>

        </ul>
        </nav>
    </header>
    
<main>
<section class="image">
    
    <h2>Retrouvez la simplicité et la fluidité de Gmail sur tous vos appareils</h2>
     <a href="#create_account"> créer un compte</a>
  
</section >
<section id="create_account">
    <div>
        <h2>
         Une boîte de reception entièrement repensée 
        </h2>
   
        <p>
        Avec les nouveaux onglets personalisables repérez 
        immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité
        </p>
    </div>
<fieldset> 
    <legend>
      Créer un compte 
    </legend>
    <form  méthode="post">
        <label for="nom">
         nom*
        </label>
        <br>
        <input type="text" id="nom" name="lastname" placeholder="Votre nom " autofocus required aria-required="true">
        <br>
        <label for="prenom">
        prenom*
        </label>
        <br>
        <input type="text" id="prenom" name="firstname" placeholder="Votre prenom" required aria-required="true" >
        <br>
        <label for="date">
        Mail*
        </label>
        <br>
        <input type="text" id="date" name="mail" placeholder="Mail" required aria-required="true" >
        <br>
        <label for="phone">
        Choisir votre mot de passe*
        </label>
        <br>
        <input type="password" id="phone" name="psw" placeholder="Votre mot de passe" required aria-required="true" >
        <br>
        <input class="button" type="submit" value="Validez votre compte">
    </form>
</fieldset>
    <?php
            //inclusion
            include_once "./src/traitement.inc.php";
    ?>
</section>

</main>
<?php
include_once "./src/footer.inc.php"
?>
</body>
</html>