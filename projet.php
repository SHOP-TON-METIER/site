<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="projet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,600&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <a href="index.php" class="retour">
        <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
        </svg>
    </a>
    <div class="mask"></div>

    <main>                      
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
                <img src="medias/images/staff/clementine-logo.png" alt="" class="perso">
                <p>GILAMA Clémentine<br>
                    <span>Chargée de communication<br>
                    & Graphiste 3D</span>
                </p>
                <a href="perso.php?id=1">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/staff/aurelien-logo.png" alt="" class="perso">
                <p>LOUVEL Aurélien<br>
                    <span>Développeur full-stack &<br>
                    Responsable identité visuelle</span>
                </p>
                <a href="perso.php?id=2">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/staff/elodie-logo.png" alt="" class="perso">
                <p>PAN Élodie<br>
                    <span>Développeuse full-stack<br><br></span>
                </p>
                <a href="perso.php?id=3">Me découvrir</a>
            </div>

            <div class="membre">
                <img src="medias/images/staff/amelie-logo.png" alt="" class="perso">
                <p>RUBIALES Amélie<br>
                    <span>Cheffe de projet &<br>
                    Chargée de communication</span>
                </p>
                <a href="perso.php?id=4">Me découvrir</a>
            </div>

        </section>

        <section class="formulaire">

            <img src="medias/images/drone-form.png" alt="">

            <form action="" method="POST" class="contact-form">

                <h2 class="titre3">Nous contacter !</h2>

                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" required id="prenom" name="prenom" placeholder="Mon prénom...">
                </div>

                <div>
                    <label for="nom">Nom</label>
                    <input type="text" required id="nom" name="nom" placeholder="Mon nom...">
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="mail" required id="mail" name="mail" placeholder="Mon adresse mail...">
                </div>

                <div>
                    <label for="postal-code">Code Postal</label>
                    <input type="text" required id="postal-code" name="postalCode" placeholder="Mon code postal..." maxlength="6">
                </div>

                <h3 class="titre-motif">Quel est le motif du contact ?</h3>
                <div class="radio-buttons">
                    <input type="radio" id="avis" name="motif" value="avis"><label for="avis">Donner mon avis</label>
                    <input type="radio" id="infos" name="motif" value="infos"><label for="infos">Demander des informations</label>
                    <input type="radio" id="suggestions" name="motif" value="suggestions"><label for="suggestions">Suggestions</label>
                    <input type="radio" id="autres" name="motif" value="autres"><label for="autres">Autres</label>
                </div>

                <label for="message">Message</label>

                <textarea name="message" id="message" rows="3" placeholder="Ecrivez votre message ici..."></textarea>

                <input type="submit" name="send" value="Envoyer" class="bouton-envoyer">

            </form>           
        </section>

        <div class="pop-up">
                <svg width="56" height="56" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 0C3.67392 0 2.40215 0.526784 1.46447 1.46447C0.526784 2.40215 0 3.67392 0 5V15C0 16.3261 0.526784 17.5979 1.46447 18.5355C2.40215 19.4732 3.67392 20 5 20H15C16.3261 20 17.5979 19.4732 18.5355 18.5355C19.4732 17.5979 20 16.3261 20 15V5C20 3.67392 19.4732 2.40215 18.5355 1.46447C17.5979 0.526784 16.3261 0 15 0H5ZM13.73 8.684C13.8198 8.58814 13.8899 8.47552 13.9362 8.35257C13.9825 8.22963 14.0041 8.09878 13.9998 7.96747C13.9956 7.83617 13.9655 7.707 13.9113 7.58732C13.8571 7.46765 13.7799 7.35982 13.684 7.27C13.5881 7.18018 13.4755 7.11011 13.3526 7.06381C13.2296 7.01751 13.0988 6.99588 12.9675 7.00015C12.8362 7.00442 12.707 7.03451 12.5873 7.08871C12.4677 7.1429 12.3598 7.22014 12.27 7.316L9.187 10.606L7.664 9.253C7.46446 9.08712 7.20825 9.0053 6.9495 9.02482C6.69075 9.04434 6.44972 9.16368 6.27732 9.35762C6.10493 9.55156 6.01467 9.80492 6.02562 10.0642C6.03657 10.3234 6.14787 10.5683 6.336 10.747L8.586 12.747C8.78069 12.9199 9.03515 13.0101 9.29529 12.9983C9.55543 12.9866 9.80072 12.8738 9.979 12.684L13.729 8.684H13.73Z" fill="white"/>
                </svg>Votre message a bien été envoyé !
            </div>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>

    <script>
    $( document ).ready(function(){
        function popup(){
            setTimeout(function(){
                $('.pop-up').css('transform', 'translate(-50%, -50%) scale(1)')
                $('.pop-up').css('top', '18%')
                $('.mask').css('opacity', '0.1')
            }, 1000);
            setTimeout(function(){
                $('.pop-up').css('transform', 'translate(-50%, -100%) scale(0.6)')
                $('.pop-up').css('top', '0')
                $('.mask').css('opacity', '0')
            }, 3000);

        }
        $('.contact-form').submit(function(event){
            event.preventDefault();
            const form = $(this).serializeArray()

            const formulaire = {
                nom : form[0].value,
                prenom : form[1].value,
                mail: form[2].value,
                codepostal: form[3].value,
                motif: form[4].value,
                msg: form[5].value
            }

            $.ajax({
                url: 'sendform.php',
                type: "POST",
                data: {
                    nom : formulaire.nom,
                    prenom: formulaire.prenom,
                    mail: formulaire.mail,
                    codepostal: formulaire.codepostal,
                    motif: formulaire.motif,
                    msg: formulaire.msg},
                dataType: 'json'
            })
            popup()
                
            
            
        })


    })      
    </script>
</body>

</html>