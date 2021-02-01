<html lang="fr">

  <head>
    <meta charset="utf-8"></meta>
    <title>Accueil</title>
    <link rel="stylesheet" type='text/css' href="style.css"/>
  </head>

  <body>

    <?php include 'navbar.php'; ?>

    <!-- Background 1ère page -->
    <div style="height: 838px; display:flex;" class="champ">
      <div style="margin: auto; background-color: rgba(255, 255, 255, 0.7); width: 450px;">
        <h1 style="padding-right: 20px; padding-left: 20px;">Isolation d'intérieur</h1>
        <p class="accueil">Passez un hiver au chaud grâce à <strong>une isolation des combles</strong> performante.</p>
        <p class="accueil">Et réalisez des économies <strong>jusqu'a 30%</strong> d'énergie.</p>
      </div>
    </div>

    <div style="height: 750px; display:flex;">
      <div style="margin: auto; text-align: left;">
        <h1 style="margin-top: 0;">Nos réalisations</h1><br>
        <div>
          <img src="Images/image1.jpg" class="real">
          <img src="Images/image2.jpg" class="real">
          <img src="Images/image3.jpg" class="real">
          <img src="Images/image4.jpg" class="real">
        </div>
        <div>
          <img src="Images/image5.jpg" class="real">
          <img src="Images/image6.jpg" class="real">
          <img src="Images/image7.jpg" class="real">
          <img src="Images/image8.jpg" class="real">
        </div>
      </div>
    </div>

    <div style="height: 700px; display: flex;">
      <div style="width: 1200px; margin:auto; display: flex; flex-direction: row; box-shadow: 1px 1px 12px #555; ">
        <div style="width: 800px; height: 500px;">
          <img src="Images/maps.png" style="width: 100%; height: 100%;">
        </div>
        <div style="width: 400px; display: flex;">
          <p style="margin: auto; padding: 20px;"> Description de la localisation, champ d'action..
          <br> Horaires, adresse.. </p>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>

  </body>

</html>