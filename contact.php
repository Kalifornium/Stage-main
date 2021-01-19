<!doctype html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Titre de la page</title>
      <link rel="stylesheet" href="style.css">
      <script src="script.js"></script>
    </head>
    <body>
<?php

include 'navbar.php';

/* Formulaire pour les entreprises souhaitant faire appel a nous */

?>  
<div class="contact" id="main">
	<h1>Contact</h1>
    <form method="post">
        <label>Email</label>
        <input class="email" type="email" name="email" required><br>
        <label>Message</label>
        <textarea class="msg" name="message" required></textarea><br>
        <input class="send" type="submit">
    </form>
    <!--
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('une adresse mail de reception', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
-->
   </div>
    </body>
</html>

