<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP'TON METIER</title>
  <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:no-preference)">
  <link rel="icon" type="image/png" href="images/drone-dark.png" media="(prefers-color-scheme:dark)">
  <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:light)">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <?php include 'header.php' ?>
  <canvas class="webgl"></canvas>

  <div class="loading">
    <div class="drone"></div>
    <div class="messages">
      <p>Salut, moi c'est Droninou! Bienvenue sur SHOP'TON METIER.</p>
      <p>
        Ce site te permettra de découvrir les métiers possibles après avoir
        étudié en MMI.
      </p>
      <p>
        Chaque magasin que tu verras représente un domaine lié à MMI, je te
        laisse les découvrir :)
      </p>
      <p>
        Clique sur un magasin pour y entrer et ainsi découvrir les différents
        métiers incarnés par les personnages !
      </p>
      <p>
        Tu as la possibilité de cliquer sur ces personnages pour voir la fiche
        métier correspondante et aussi d'acheter ceux que tu préfères.
      </p>
      <p>Tu connaîtras alors quel domaine te correspond le mieux !</p>
      <p>Je te souhaite une bonne visite !</p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      if (!window.matchMedia)
        return

      var current = $('head > link[rel="icon"][media]');
      $.each(current, function(i, icon) {
        var match = window.matchMedia(icon.media)

        function swap() {
          if (match.matches) {
            current.remove()
            current = $(icon).appendTo('head')
          }
        }
        match.addListener(swap)
        swap()
      })
    })
  </script>
  <!-- <script>
    $(document).ready(function() {

      $('p').hide();
      var compteur = 2000;
      for (var n = 0; n <= 6; n++) {

        $('p').eq(n).delay(compteur).fadeIn();
        console.log($('p').eq(n).html());
        compteur = compteur + 3000;

      }

    })
  </script> -->

</body>

</html>