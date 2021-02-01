<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8"></meta>
        <title>Champ d'action</title>
        <link rel="stylesheet" type='text/css' href="style.css"/>

    </head>

    <body>

    <?php

        include 'navbar copy.php';
    ?>

    <!-- Bandeau "Champ d'action" -->
    <div style="height: 710px; margin-top: -100px;" class="champ"></div>

    <div style="height: 665px; line-height: 665px; border: 1px solid black; background: url('Images/fond_contact.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div style="border: 1px solid blue; text-align: left; width: 700px; margin: auto; vertical-align: middle; display: inline-block; line-height:1.2; width: 900px;">
            <h2 style="font-size: 45px; color: white;">Contact</h2>
            <div style="display: flex; flex-direction: row;">
                <div style="border: 1px solid green; background-color: white; width: 200px; height: 400px;">
                    <br><img src="Images/logo_contact.png" style="height: 200px;">
                    <br><strong>PRO TEK ISO</strong><br>
                    <i>85 Rue Gallieni<br>
                    75000 Paris</i><br>
                    <br>
                    +33 6 43 66 65 86<br>
                    <br>
                    contact@protekiso.com
                </div>
                <div style="text-align: left; border: 1px solid red; width: 700px; background-color: rgba(255, 255, 255, 0.2);">
                    <form method="post">
                        <label>Email</label>
                        <input class="email" type="email" name="email" required><br>
                        <label>Message</label>
                        <textarea class="msg" name="message" required></textarea><br>
                        <input class="send" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Maps de Google Maps pour délimiter le périmètre du champ d'action -->
    <div style="height: 37.500em;">
        <iframe src="https://www.google.com/maps/d/embed?mid=19Sh4SGqceS3Fpzu6ZBtziD7KiOQb1R89"></iframe>
    </div>

    <?php include 'footer.php'; ?>

    </body>
    
</html>