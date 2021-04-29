<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'styles_header.php' ?>
    <link rel="stylesheet" href="styles_ticket.css">
    <?php include 'styles_footer.php' ?>

    <!-- Charger fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Charger icones -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>
<body>
    <?php include 'header.php' ?>

    <main>
        <h1>Mon ticket de caisse</h1>

        <section>
            <h2><span>SHOP'</span>TON MÉTIER</h2>

            <p class="adresse">
                1 Avenue du web<br>
                <span>20 300 FRANCE</span>
            </p>

            <div class="infos-utilisateur">
                <p>
                    Client : <span id="utilisateur"></span>
                    <br>
                    N° de ticket : <span id="num_ticket"></span>
                </p>

                <p>
                    Date : <span id="date">27/04/2021</span>
                    <br>
                    Heure : <span id="heure">11:38</span>
                </p>
            </div>

            <ol id="metiers">
                <li>
                    Chargé de communication<br>
                    <span>Diffuser une image positive de l'entreprise</span>
                </li>
                <li>
                    Développeur web<br>
                    <span>Développer des plateformes web</span>
                </li>
            </ol>

            <div class="total">
                <p>Total
                    <span id="stats"></span>
                    <span class="pourcentage">80%</span>
                </p>

                <span id="domaine-favori">Communication</span>
            </div>

            <div class="pied-ticket">
                <img src="images/code barre.svg" alt="Code barre" class="code-barre">

                <p>
                    MERCI POUR VOTRE VISITE<br>
                    A BIENTOT<br>
                    <br>
                    N'HESITEZ PAS A RENOUVELER L'EXPERIENCE !
                </p>

            </div>

        </section>

        <div class="boutons">
            <a href="" class="telecharger">
                Télécharger
                <span class="iconify" data-icon="akar-icons:arrow-down" data-inline="false"></span>
            </a>

            <a href="" class="retour-accueil">
                Retourner à l'accueil
                <span class="iconify" data-icon="eva:arrow-ios-downward-fill" data-inline="false"></span>
            </a>
        </div>
        
    </main>

    <?php include 'footer.php' ?>
</body>
</html>