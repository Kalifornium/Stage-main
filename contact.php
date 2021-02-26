<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8"></meta>
        <title>Contact</title>
        <link rel="stylesheet" type='text/css' href="style.css"/>

    </head>

    <body>

    <?php

        include 'navbar.php';
    ?>

    <!-- Bandeau "Champ d'action" -->
    <!-- <div style="height: 710px; margin-top: -100px;" class="champ"></div> -->

    <div style="height: 665px; line-height: 665px; border: 0px solid black; background: url('Images/fond_contact.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div style="border: 0px solid blue; text-align: left; width: 700px; margin: auto; vertical-align: middle; display: inline-block; line-height:1.2; width: 900px;">
            <h2 style="font-size: 45px; color: white; margin-top: 0px;">Contact</h2>
            <div style="display: flex; flex-direction: row;">
                <div style="border: 0px solid green; background-color: white; width: 200px; height: 400px; border-radius: 10px 0px 0px 10px;">
                    <br><img src="Images/logo contact.png" style="height: 200px; margin-bottom: 1em;">
                    <br><strong>PRO TEK ISO</strong><br>
                    <i>85 Rue Gallieni<br>
                    95170 Deuil-la-Barre</i><br>
                    <br>
                    +33 1 39 83 24 50<br>
                    <br>
                    pro-tek-iso@orange.fr
                </div>
                <div style="text-align: left; border: 0px solid red; width: 700px; background-color: rgba(255, 255, 255, 0.25); border-radius: 0px 10px 10px 0px; display: flex;">
                    <div style="border: 0px solid green; height: 320px; width: 570px; margin: auto; text-align: left;">
                        <div>
                            <h3 style="margin: 0; padding: 0; text-align: left; margin-bottom: 1em; color: white;">Nous contacter</h3>
                        </div>
                        <form method="post" style="margin:auto; border: 0px solid blue;">

                            <div style="display: flex; flex-direction: row;">
                                <div class="form__group field" style="padding-right: 5em;">
                                    <input type="text" class="form__field" placeholder="Name" name="name" id='name' />
                                    <label for="name" class="form__label">Nom</label>
                                </div>

                                <div class="form__group field">
                                    <input type="email" class="form__field" placeholder="Mail" name="email" id='name' required />
                                    <label for="Mail" class="form__label">Mail*</label>
                                </div>
                            </div>
                            
                            <div class="form__group field" style="width: 100%; margin-top: 2em;">
                                <input type="msg" class="form__field" placeholder="Message" name="message" id='name' required />
                                <label for="Message" class="form__label">Message</label>
                            </div>

                            <input class="button" type="submit" />

                        </form>

                        <?php
                        if (isset($_POST['message'])) {
                            $position_arobase = strpos($_POST['email'], '@');
                            if ($position_arobase === false)
                                echo '<p>Votre email doit comporter un arobase.</p>';
                            else 
                            {
                                $retour = mail('dylan.hacquart91@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                                if($retour)
                                    echo '<p>Votre message a été envoyé.</p>';
                                else
                                    echo '<p>Erreur.</p>';
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Maps de Google Maps pour délimiter le périmètre du champ d'action -->
    <div style="height: 25.750em;" class="map-responsive">
        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=19Sh4SGqceS3Fpzu6ZBtziD7KiOQb1R89"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.2148886800073!2d2.3273660222162493!3d48.9684336976623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e668fcd90c2d27%3A0xe4fba7e345ccb738!2s85%20Rue%20Galli%C3%A9ni%2C%2095170%20Deuil-la-Barre!5e0!3m2!1sfr!2sfr!4v1612357561626!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div style="height: 5.500em; background-color: #242323; border: 1px solid #242323;" id="contenu">
            <p style="text-align: center!important; color: white;">© 2021 Pro-Tek-Iso - Tous droits réservés</p>
    </div>

    </body>
    
</html>