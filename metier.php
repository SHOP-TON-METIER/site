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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="metier.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <div class="avatar"></div>

        <section>
            <?php
            $id = htmlentities($_GET['id']);

            $sql = "SELECT id_shop, shop, nom, description, salaire FROM metier  WHERE id_metier = :id";
            $req = $link->prepare($sql);
            $req->execute(array(":id" => $id));

            while ($data = $req->fetch()) {
                echo ('<p class="fil-Ariane"><a href="shop.php?id=' . $data['id_shop'] . '" class="current-domain">' . $data['shop'] . '</a>
                    &nbsp &gt &nbsp <span>' . $data['nom'] . '</span></p>');

                echo ('<h1>' . $data['nom'] . '</h1>');

                echo ('<h2>Description</h2>
                    <p>' . $data['description'] . '</p>');

                echo ('<div class="boutons">
                    <a href="#" class="ajouter-panier">Ajouter au panier</a>
                    <span href="#" class="like">
                        <img src="medias/images/like.svg" alt="Aimer le métier"> 20
                    </span></div>');

                echo ('<h2>Salaire</h2>
                    <p class="salaire" id="salaire">' . $data['salaire'] . '</p>');
            }
            $req = null;
            ?>

            <?php
            $sql = "SELECT competences FROM rel_metier_comp WHERE id_metier = :id";
            $req = $link->prepare($sql);
            $req->execute(array(":id" => $id));

            echo ('<h2>Compétences</h2>');
            echo ('<ul>');
            while ($data = $req->fetch()) {
                echo ('<li>' . $data['competences'] . '</li>');
            }
            $req = null;
            echo ('</ul>');
            ?>

            <?php
            $sql = "SELECT formation FROM rel_form_metier WHERE id_metier = :id";
            $req = $link->prepare($sql);
            $req->execute(array(":id" => $id));

            echo ("<h2>Les poursuites d'études</h2>");
            echo ('<ul>');
            while ($data = $req->fetch()) {
                echo ('<li>' . $data['formation'] . '</li>');
            }
            $req = null;
            echo ('</ul>');
            ?>

            <h2>Avis des anciens MMI</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?php
                    $sql = "SELECT * FROM ancienetudiant WHERE id_metier = :id";
                    $req = $link->prepare($sql);
                    $req->execute(array(":id" => $id));

                    while ($data = $req->fetch()) {
                        echo ('<div class="avis swiper-slide">
                                <span class="nom-etudiant">' . $data['nom'] . ' ' . $data['prenom'] . '</span><br>
                                <span class="adj-etudiant">' . $data['adjectifs'] . ' Promotion : ' . $data['promotionMMI'] . '</span>
                                <p class="avis-etudiant">' . $data['avis'] . '</p>
                                <p class="conseil-etudiant">Conseil : ' . $data['conseil'] . '</p>
                            </div>');
                    }
                    $req = null;
                    ?>

                </div>

                <!-- Add pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </section>

    </main>

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
    <!-- Charger JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Script pour le swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <!-- Script pour l'objet 3D -->
    <script src="js/three.min.js"></script>
    <script src="js/GLTFLoader.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script>
        var camera, scene, renderer, avatar

        //CREATE SCENE

        function createScene() {

            avatar = document.querySelector(".avatar")

            WIDTH = avatar.offsetWidth
            HEIGHT = avatar.offsetHeight

            scene = new THREE.Scene()
            camera = new THREE.PerspectiveCamera(80, WIDTH / HEIGHT, 0.1, 1000)
            scene.position.z -= 6


            const ambientLight = new THREE.AmbientLight(0xffffff, 2)
            scene.add(ambientLight)


            renderer = new THREE.WebGLRenderer({
                antialias: true
            })

            renderer.setSize(WIDTH, HEIGHT)
            renderer.setClearColor(0xffffff)
            avatar.appendChild(renderer.domElement)

            window.addEventListener('resize', handleWindowResize, false)

        }

        //RESIZE

        function handleWindowResize() {
            WIDTH = avatar.offsetWidth
            HEIGHT = avatar.offsetHeight
            renderer.setSize(WIDTH, HEIGHT)
            camera.aspect = WIDTH / HEIGHT
            camera.updateProjectionMatrix()
        }

        //CREATE OBJECT

        function createObject() {
            const loader = new THREE.GLTFLoader();
            <?php
            $sql = "SELECT code FROM metier WHERE id_metier = :id";
            $req = $link->prepare($sql);
            $req->execute(array(":id" => $id));

            while ($data = $req->fetch()) {
                echo ("const url = 'gltf/" . $data['code'] .
                    "'");
            }
            $req = null;

            ?>

            loader.load(
                url,

                function(gltf) {
                    model = gltf.scene
                    scene.add(model)
                }
            )
        }


        //LERP
        function lerp(a, b, t) {
            return ((1 - t) * a + t * b)
        }

        let scroll = 0

        //LOOP

        function loop() {

            scroll = lerp(scroll, window.pageYOffset, .1)
            scene.position.y = -2 + (scroll / HEIGHT) * -6
            scene.rotation.y = -16.5 * scroll / HEIGHT


            renderer.render(scene, camera)
            requestAnimationFrame(loop)

        }

        //INIT

        function init(event) {
            createScene()
            createObject()
            loop()
        }

        window.addEventListener('load', init, false)
    </script>

</body>

</html>