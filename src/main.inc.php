<main>
    <section class="image">

        <h2>Retrouvez la simplicité et la fluidité de Gmail sur tous vos appareils</h2>
        <a href="#create_account"> créer un compte</a>

    </section>
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
            <form action="./index.php" method="post">
                <label for="lastname">
                    nom*
                </label>
                <br>
                <input type="text" id="nom" name="lastname" placeholder="Votre nom " autofocus required
                    aria-required="true">
                <br>
                <label for="firstname">
                    prenom*
                </label>
                <br>
                <input type="text" id="prenom" name="firstname" placeholder="Votre prenom" required
                    aria-required="true">
                <br>
                <label for="mail">
                    Mail*
                </label>
                <br>
                <input type="text" id="mail" name="mail" placeholder="Votre Mail" required aria-required="true">
                <br>
                <label for="psw">
                    Choisir votre mot de passe*
                </label>
                <br>
                <input type="password" id="psw" name="psw" placeholder="Votre mot de passe" required
                    aria-required="true">
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