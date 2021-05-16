<!DOCTYPE html>
<html lang="fr">

<?php
$link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="images/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <a href="" class="retour">
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z" fill="#09192C"/>
            </svg>

            <span>Continuer le shopping</span>
            
            <img src="images/trolley.svg" alt="">
        </a>

        <section class="metiers-choisis">
            <h1>Mon panier</h1>
            <p>4 métiers dans mon panier</p>

            <div class="metier audiovisuel">
                <img src="images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h2>Photographe</h2>
                    <p class="phrase-metier">
                        Le professionnel de l’image qui sommeille en toi va pouvoir s’épanouir si tu deviens photographe
                        !
                    </p>
                    <a href="" class="lien-fiche-metier">Fiche descriptive</a>
                </div>
                <a href=""><img src="images/liked-pink.svg" alt="" class="bouton-like"></a>
                <a href=""><img src="images/remove.svg" alt=""></a>
            </div>

            <div class="metier audiovisuel">
                <img src="images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h2>Cadreur-monteur</h2>
                    <p class="phrase-metier">
                        Tu es créatif et tu rêves de faire des montages et être sur les tournages des plus grands films
                        ? Je crois bien que le métier de cadreur-monteur est fait pour toi !
                    </p>
                    <a href="" class="lien-fiche-metier">Fiche descriptive</a>
                </div>
                <a href=""><img src="images/liked-pink.svg" alt="" class="bouton-like"></a>
                <a href=""><img src="images/remove.svg" alt=""></a>
            </div>

            <div class="metier dvpt">
                <img src="images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h2>Développeur full-stack</h2>
                    <p class="phrase-metier">
                        Tu ne sais pas quoi choisir entre front-end et back-end ? Une seule solution, deviens
                        développeur full-stack pour être les deux !
                    </p>
                    <a href="" class="lien-fiche-metier">Fiche descriptive</a>
                </div>
                <a href=""><img src="images/like.svg" alt="" class="bouton-like"></a>
                <a href=""><img src="images/remove.svg" alt=""></a>
            </div>

            <div class="metier com">
                <img src="images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h2>Community Manager</h2>
                    <p class="phrase-metier">
                        Si devenir l’ambassadeur d’une marque, d’une société, d’un produit ou même d’une personnalité,
                        sur les réseaux sociaux t'intéresse, devient Community Manager !
                    </p>
                    <a href="" class="lien-fiche-metier">Fiche descriptive</a>
                </div>
                <a href=""><img src="images/liked-pink.svg" alt="" class="bouton-like"></a>
                <a href=""><img src="images/remove.svg" alt=""></a>
            </div>

        </section>

        <section class="infos-utilisateur">

            <form action="">
                <h1>Mes informations</h1>

                <h2 class="titre-form">Situation professionnelle</h2>

                <div class="situation-pro">
                    <label for="lyceen" class="checkbox">
                        <input type="radio" id="lyceen" name="situtation-pro" value="lyceen">
                        <span>Lycéen(ne)</span>
                    </label>

                    <label for="reorientation" class="checkbox">
                        <input type="radio" id="reorientation" name="situtation-pro" value="reorientation">
                        <span>En réorientation</span>
                    </label>

                    <label for="mmi" class="checkbox">
                        <input type="radio" id="mmi" name="situtation-pro" value="mmi">
                        <span>Etudiant en MMI</span>
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

    <?php include 'footer.php' ?>
</body>

</html>