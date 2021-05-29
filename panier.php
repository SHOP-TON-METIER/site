<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <a href="" class="retour">
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z"
                    fill="#09192C" />
            </svg>

            <span>Continuer le shopping</span>

            <img src="medias/images/trolley.svg" alt="">
        </a>

        <section class="metiers-choisis">
            <h1>Mon panier</h1>

            <p>métiers dans mon panier</p>

            <div class="metier audiovisuel">
                <img src="medias/images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h2>'.($_SESSION['panier'][$i]).'</h2>
                    <p class="phrase-metier">
                        Le professionnel de l’image qui sommeille en toi va pouvoir s’épanouir si tu deviens photographe
                        !
                    </p>
                    <a href="" class="lien-fiche-metier">Fiche descriptive</a>
                </div>
                <img src="medias/images/like.svg" alt="" class="bouton-like">

                <svg width="55" height="55" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="remove">
                    <rect x="5.25" y="6.5" width="2" height="16" rx="1" transform="rotate(-45 5.25 6.5)" fill="#F14A72" />
                    <rect x="16.5" y="5" width="2" height="16" rx="1" transform="rotate(45 16.5 5)" fill="#F14A72" />
                </svg>

            </div>
            
        </section>

        <section class="infos-utilisateur">

            <form action="">
                <h1>Mes informations</h1>

                <h2 class="titre-form">Situation professionnelle</h2>

                <div class="situation-pro">
                <label for="lyceen" class="checkbox">
                        <input type="radio" id="lyceen" name="situtation-pro" value="lyceen">
                        <p class="box">Lycéen(ne)</p>
                    </label>

                    <label for="mmi" class="checkbox">
                        <input type="radio" id="mmi" name="situtation-pro" value="reorientation">
                        <p class="box">Etudiant(e) en MMI</p>
                    </label>

                    <label for="autre" class="checkbox">
                        <input type="radio" id="autre" name="situtation-pro" value="mmi">
                        <p class="box">Autre</p>
                    </label>
                </div>

                <label for="nom" class="titre-form">Nom</label>
                <input type="text" id="nom" name="nom" required placeholder="Mon nom...">

                <label for="prenom" class="titre-form">Prénom</label>
                <input type="text" id="prenom" name="prenom" required placeholder="Mon prénom...">

                <div class="age-postal-inputs">
                    <div>
                        <label for="age" class="titre-form">Age</label>
                        <input type="text" id="age" name="age" required placeholder="Mon âge...">
                    </div>
                    <div>
                        <label for="code-postal" class="titre-form">Code postal</label>
                        <input type="text" id="code-postal" name="code-postal" required
                            placeholder="Mon code postal...">
                    </div>
                </div>

                <div class="domaine-fav">
                    <p>Domaine favori</p>
                    <span>Audiovisuel</span>
                </div>

                <input type="submit" name="valider" value="Valider ma commande !" class="bouton-valider">
            </form>

        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="medias/js/app.js"></script>
    <script>
        $(document).ready(function(){
            $('.bouton-like').on('click', function(){
                if($(this).attr('src') == 'medias/images/like.svg'){
                    $(this).attr('src','medias/images/liked-pink.svg')
                }
                else{
                    $(this).attr('src','medias/images/like.svg')
                }
            })
        })
    </script>
</html>