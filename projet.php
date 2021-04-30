<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="images/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="projet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>

    <h1>Le projet <span>SHOP</span>'TON MÉTIER</h1>

    <div>

        <h1 class="titre1">En quoi consite ce projet ?</h1>
        <p class="projet"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing lectus penatibus
            sollicitudin velit aliquam duis vitae lacus sit. Tincidunt sed vestibulum erat non turpis rhoncus tincidunt.
            Mauris suspendisse sapien eu, at in at convallis. Ultrices hac consequat eros, ut purus, eget sed nisi,
            nascetur. Tempus habitant fringilla consequat tempor eu lacus blandit curabitur. Cras hac urna, sed massa
            ut. Velit pellentesque elementum eleifend orci dictum molestie. In fermentum lacus ultricies nibh elit nunc
            ipsum semper. Fames venenatis adipiscing duis dolor lacus, lobortis vestibulum, vitae.
            Quis arcu volutpat convallis commodo sit vitae. Elit non ullamcorper aliquam leo. Hendrerit non aliquet
            ultricies magna nisi, faucibus ut egestas. Id porttitor dui, nisi posuere. Ultricies eget phasellus faucibus
            risus neque risus libero. Turpis non turpis et diam curabitur id. In nisi purus est id congue urna dolor
            tortor amet. Metus tincidunt ac nunc, neque augue in tortor orci id. Curabitur eu ipsum elit laoreet in
            parturient interdum non magna.
            Dolor gravida non egestas amet at volutpat mauris. Malesuada nullam nibh praesent felis, mattis. Sed mattis
            nisl sagittis tellus. Quis placerat adipiscing egestas viverra in commodo scelerisque morbi faucibus. Massa,
            tempus mattis sit vel aliquet facilisis a ipsum. Elit, gravida hendrerit nunc, commodo volutpat quis nullam
            cum. Feugiat turpis habitant neque gravida volutpat fermentum sit.</p>
    </div>
    <h1 class="titre2">Qui sommes-nous ?</h1>

    <section>
        <div class="objet3D">clem</div>
        <div class="objet3D">aurel</div>
        <div class="objet3D">élo</div>
        <div class="objet3D">am</div>
    </section>
    <div class="nous">
        <ul>
            <li>GILAMA Clémentine <br> <span>Communication <br>& Design</span></li>
            <li>LOUVEL Aurélien <br> <span>Développement Web <br>& Design</span></li>
            <li>PAN Élodie <br><span>Développement web <br>& Design</span></li>
            <li>RUBIALES Amélie <br> <span>Chef de projet <br> & Communication</span></li>
        </ul>

    </div>
    <form action="">
        <h1 class="titre3">Contactez-nous !</h1>

        <div>

            <input type="text" id="Nom" placeholder="NOM">
        </div>
        <div>
            <input type="text" id="Prenom" placeholder="PRÉNOM">
        </div>
        <div>
            <input type="email" id="email" placeholder="EMAIL">
        </div>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez votre message ici..."></textarea>
        </div>
        <div>
            <input type="submit" value="envoyer" class="bouton">
        </div>
    </form>

    <?php include 'footer.php' ?>

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
</body>

</html>