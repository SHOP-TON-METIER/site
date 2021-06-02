<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP’TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">    
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="recherche.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <main>

        <a href="javascript:history.back()" class="retour">
            <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z"
                    fill="#09192C" />
            </svg>
        </a>

        <h1>Voici ce que nous avons trouvé !</h1>
        <section>
        <div class="found"></div>
        <div class="notfound"></div>

        </section>
  </main>

    <?php include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>
    <script>
    $(function(){

    <?php
    $search = $_GET['search'];
    echo 'var query = "' . $search . '"';
    ?>       

    var request = $.ajax({
    url: "search.php",
    method: "POST",
    data: {
        search : query,
        category : 'metier'
    }
    })
    request.done(function(data) {
      donnees = JSON.parse(data);        
      $('main .found').append('<div class="searchmetier"><h2></h2><div class="content"></div></div>')
      i = 0
      $.each(donnees, function(index, value){
        $("main .found .searchmetier .content").append('<div class="metier '+ value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'"><img src="medias/images/metier/'+ value.id+'.png" alt="" class="perso-3d"><div><h3>'+value.nom+'</h3><a href="metier.php?id='+ value.id + '" class = "lien-fiche-metier">Allez vers la fiche métier</a></div></div>').show()
        i++
      })
      if (i >! 1) {
        $("main .found .searchmetier h2").html('Métiers trouvés')
      }
      if (i == 1) {
        $("main .found .searchmetier h2").html('Métier trouvé')
      }
    }, domaine)


    function domaine() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'domaine'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data);
        $('main .found').append('<div class="searchdomaine"><h2></h2><div class="content"></div></div>')
        i = 0
        $.each(donnees, function(index, value){
            // console.log(value)
          $("main .found .searchdomaine .content").append('<div class="metier '+ value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'"><img src="medias/images/shop/'+ value.id+'.png" alt="" class="perso-3d"><div><h3>'+ value.nom +'</h3><a href="shop.php?id='+ value.id + '" class = "lien-fiche-metier">Aller vers le shop</a></div></div>').show()
          i++
        })
        if (i >! 1) {
          $("main .found .searchdomaine h2").html('Domaines trouvés')
        }
        if (i == 1) {
          $("main .found .searchdomaine h2").html('Domaine trouvé')
        }
      }, etudiantnom)
    
    }
    
    function etudiantnom() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiantnom'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data)
        $('main .found').append('<div class="searchetudiant"><h2></h2><div class="content"></div></div>')
        i=0
        $.each(donnees, function(index, value){
          $("main .found .searchetudiant .content").append('<div class="metier '+ value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'"><div class="avisetud"><h3>'+ value.prenom +' '+value.nom+'</h3><a href="metier.php?id='+ value.id + '#'+ value.nom +'" class = "lien-fiche-metier">Lire son avis</a></div></div>')
          i++
        })
        if (i>! 1) {
          $("main .found .searchetudiant h2").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("main .found .searchetudiant h2").html('Étudiant trouvé')
        }
      }, etudiantprenom)

    }

    function etudiantprenom() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiantprenom'
        }
      })    
      request.done(function (data) {
        donnees = JSON.parse(data)
        i=$('main .searchetudiant .content').children().length
        $.each(donnees, function(index, value){
          $("main .found .searchetudiant .content").append('<div class="metier '+ value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'"><div class="avisetud"><h3>'+ value.prenom +' '+value.nom+'</h3><a href="metier.php?id='+ value.id + '#'+ value.nom +'" class = "lien-fiche-metier">Lire son avis</a></div></div>')
          i++
        })
        if (i>! 1) {
          $("main .found .searchetudiant h2").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("main .found .searchetudiant h2").html('Étudiant trouvé')
        }
      }, check)

    }


      function check() {

        if ($('main .content').children().length == 0) {
          $('h1').html("Nous n'avons rien trouvé 😥")
          $('main .found').remove()

          $.ajax ({
            url: "//api.giphy.com/v1/gifs/random?api_key=0UTRbFtkMxAplrohufYco5IY74U8hOes&tag=sad%20face&rating=g",
            type: "GET",
            success: function(response) {
            imgSrc = response.data.image_url;
            $('main .notfound').css('background-image', 'url("'+imgSrc+'")')
            
            }
          })
        } else{
            $('main .notfound').remove()
        }
    }
    })
    </script>
</body>

</html>