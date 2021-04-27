<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php include 'styles_header.php' ?>
  <link rel="stylesheet" href="styles_ticket(old).css">
  <?php include 'styles_footer.php' ?>

  <!-- Charger fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Charger icones -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
  <?php include 'header.php' ?>

  <h1>Mon ticket de caisse</h1>
  
  <main>
    <h1><span>SHOP</span>'TON MÉTIER</h1>

    <p>
      1 Avenue du web<br>
      20 300 FRANCE
    </p>

    <img src="images/code barre.svg" alt="Code barre" class="code-barre">

    <div class="infos">
      <p>
        Client : <span id="utilisateur"></span>
        <br />
        N° de ticket : <span id="num_ticket"></span>
      </p>

      <p id="date"></p>
    </div>

    <ol id="metier">
      <!-- <li>
                Chargé de communication<br>
                <span>Diffuser une image positive de l'entreprise</span>
            </li>
            <li>
                Développeur web<br>
                <span>Développer des plateformes web</span>
            </li> -->
    </ol>

    <div class="total">
      <p>TOTAL</p>
      <div id="stats"></div>
      <!-- <span class="pourcentage">80%</span> -->
      <span id="conclusion">Ton domaine c'est la communication !</span>
    </div>

    <div class="pied-ticket">
      MERCI POUR VOTRE VISITE<br>
      A BIENTOT<br>
      <br>
      N'HESITEZ PAS A RENOUVELER L'EXPERIENCE !
    </div>

  </main>

  <a href="" class="bouton-telecharger">Télécharger</a>

  <a href="" class="retour-accueil">Retourner à l'accueil</a>

  <?php include 'footer.php' ?>
  
</body>

</html>