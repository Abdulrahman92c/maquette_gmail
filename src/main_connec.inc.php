<main>
    <section class="image">

        <h2>Retrouvez la simplicité et la fluidité de Gmail sur tous vos appareils</h2>
        <a href="./index.php"> créer un compte</a>

    </section>
    <section id="create_account2">
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
                Connexion
            </legend>
            <form action="./connexion.php" method="post">
                <label for="mail">
                    Votre mail*
                </label>
                <br>
                <input type="text" id="mail" name="mail" placeholder="Votre Mail" required aria-required="true">
                <br>
                <label for="psw">
                    Votre mot de passe*
                </label>
                <br>
                <input type="password" id="psw" name="psw" placeholder="Votre mot de passe" required
                    aria-required="true">
                <br>
                <input class="button" type="submit" value="Connexion">
            </form>
        </fieldset>
        <?php
        //inclusion
        include_once "./src/log.inc.php";
        ?>
    </section>

</main>