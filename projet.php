<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/images/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="projet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,600&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>

        <a href="index.php" class="retour">
            <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
            </svg>
        </a>
        
        <h1>Le projet <span>SHOP</span>'TON MÉTIER</h1>

        <section class="projet">

            <h2>En quoi consite ce projet ?</h2>

            <p> 
                SHOP’TON MÉTIER est un site qui te permet de découvrir vingt-deux métiers post-MMI dans les domaines du design, de la communication, du développement web et de l’audiovisuel.<br>
                Difficile de faire un choix ? La plateforme réalisée en quatre mois par une équipe de quatre étudiants en première année de MMI, t’aidera à faire ton choix en te donnant les informations essentielles avec des avis et des conseils d’anciens étudiants MMI exerçant le métier qui t’intéresse.<br>
                Ce fut un projet fabuleux car nous avons appris et acquis de nouvelles compétences techniques et avons développé notre sens des relations humaines.
            </p>

            <div class="illustration"></div>
        </section>


        <section class="presentation">

            <h2>Qui sommes-nous ?</h2>

            <div class="membre">
                <img src="medias/images/clementine-logo.png" alt="" class="perso">
                <p>GILAMA Clémentine<br>
                    <span>Chargée de communication<br>
                    & Graphiste 3D</span>
                </p>
                <a href="perso.php?id=1">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/aurelien-logo.png" alt="" class="perso">
                <p>LOUVEL Aurélien<br>
                    <span>Développeur full-stack &<br>
                    Responsable identité visuelle</span>
                </p>
                <a href="perso.php?id=2">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/elodie-logo.png" alt="" class="perso">
                <p>PAN Élodie<br>
                    <span>Développeuse full-stack<br><br></span>
                </p>
                <a href="perso.php?id=3">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/amelie-logo.png" alt="" class="perso">
                <p>RUBIALES Amélie<br>
                    <span>Cheffe de projet &<br>
                    Chargée de communication</span>
                </p>
                <a href="perso.php?id=4">Me découvrir</a>
            </div>

        </section>

        <section class="formulaire">

            <img src="medias/images/drone-form.png" alt="">

            <form action="">

                <h2 class="titre3">Nous contacter !</h2>

                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" required id="prenom" placeholder="Mon prénom...">
                </div>

                <div>
                    <label for="nom">Nom</label>
                    <input type="text" required id="nom" placeholder="Mon nom...">
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="mail" required id="mail" placeholder="Mon adresse mail...">
                </div>

                <div>
                    <label for="postal-code">Code Postal</label>
                    <input type="text" required id="postal-code" placeholder="Mon code postal...">
                </div>

                <h3 class="titre-motif">Quel est le motif du contact ?</h3>
                <div class="radio-buttons">
                    <input type="radio" id="avis" name="motif"><label for="avis">Donner mon avis</label>
                    <input type="radio" id="infos" name="motif"><label for="infos">Demander des informations</label>
                    <input type="radio" id="suggestions" name="motif"><label for="suggestions">Suggestions</label>
                    <input type="radio" id="autres" name="motif"><label for="autres">Autres</label>
                </div>

                <label for="message">Message</label>

                <textarea name="message" id="message" rows="3" placeholder="Ecrivez votre message ici..."></textarea>

                <div class="button-right">
                    <input type="submit" name="send" value="Envoyer" class="bouton">
                </div>

            </form>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            if (!window.matchMedia)
                return

            var current = $('head > link[rel="icon"][media]');
            $.each(current, function (i, icon) {
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
</body>

</html>