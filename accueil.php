<!doctype html>
<html lang="fr">
    <head>
      <meta charset="utf-8"></meta>
      <title>Titre de la page</title>
      <link rel="stylesheet" type='text/css' href="style.css"/>
    </head>
    <body>
<?php
include 'navbar.php';

/* Présentation de l’entreprise :
    - Fonction
    - Localité
    - Champ d’action
    - Le matériel utilisé
    - Les prestataires
*/
?>
  	  <div class="general_intro" id="main">
        <div class="title">
          <h2>PROTEKISO, notre expérience</h2>
        </div>
        <div class='desc'>
          <p>Nous faisons ...<a href="services.php">l'isolation et la gaine coupe-feu</a></p>
        </div>
        <div class="subtitle">
        	<p class="title">Nos réalisations</h3>
        </div>
        <div class="photo">
        	 <img src="#" alt="photo 1"/>
        	 <img src="#" alt="photo 2"/>
        	 <img src="#" alt="photo 3"/>
        	 <img src="#" alt="photo 4"/> 
        </div>
      </div>

      <div class="general_info" id="main">
        <div class="inner">
        	<div class="img">
        		<img src="images/IC_local.png"/>
      		</div>
      		<div class="desc">
      			<p class="title">Coordonnées</p>
      			<p>Notre adresse est ...</p>
      			<p class="title">Horaires</p>
      			<ul>
      				<li>Lundi :</li>
      				<li>Mardi :</li>
      				<li>Mercredi :</li>
      				<li>Jeudi :</li>
      				<li>Vendredi :</li>
      				<li>Samedi :</li>
      			</ul>
      		</div>
        </div>
        <div class="inner">
        	<div class="img">
        		<img src="images/IC_champ.png"/>
      		</div>
      		<div class="desc">
      			<p class="title">Champ d'action</p>
      			<p>Nous proposons nos services dans toute (département/région ) ...</p>
      		</div>
        </div>
      </div>
		<div class="map" id="main">
			<iframe src="https://www.google.com/maps/d/embed?mid=19Sh4SGqceS3Fpzu6ZBtziD7KiOQb1R89"></iframe>
		</div>
      <!-- Le reste du contenu -->
    </body>
</html>