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
    <link rel="stylesheet" href="perso.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>

    <main>

        <a href="" class="retour">
            <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
            </svg>
        </a>

        <div class="avatar"></div>

        <section>
            <?php
            $id = htmlentities($_GET['id']);

            $sql = "SELECT * FROM staff  WHERE id = :id";
            $req = $link->prepare($sql);
            $req->execute(array(":id" => $id));

            while ($data = $req->fetch()) {
                echo ('<p class="fil-Ariane">
                <a href="./projet.php" class="current-domain">Projet</a>
                &nbsp &gt &nbsp <span>' . $data['prenom'] . ' ' . $data['nom'] . '</span>
                </p>
                <h1>' . $data['prenom'] . '<br><span class="nom-famille">' . $data['nom'] . '</span></h1>
                <p class="role">' . $data['roles'] . '</p>
                <h2>Présentation</h2>
                <p>' . $data['presentation'] . '</p>
    
                <div class="boutons">
                        <a href="' . $data['lienCvNum'] . '" class="cv cv-num">CV interactif</a>
                        <a href="' . $data['lienCvTrad'] . '" class="cv cv-trad">CV</a>
                        <a href="' . $data['lienLinkedin'] . '"><img src="images/linkedin_logo.png" alt="Voir son Linkedin"></a>
                        <a href="' . $data['lienInsta'] . '"><img src="images/insta_logo.png" alt="Voir son Instagram"></a>
                </div>
    
                <h2>Missions</h2>
                    <ul class="missions" id="missions">' . $data['missions'] . '</ul>');
            }
            $req = null;
            ?>

            <!-- <h2>Présentation</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut excepturi cumque placeat nisi dolor nesciunt animi aliquam fugit consequuntur esse asperiores possimus sed, quas odio ex minima repellendus dolorum libero, consequatur perspiciatis consectetur atque temporibus? Nisi ipsa similique, provident vel earum nulla reiciendis corrupti dolorum pariatur ut laboriosam. Odio, voluptates?
            </p>

            <div class="boutons">
                    <a href="" class="cv cv-num">CV interactif</a>
                    <a href="" class="cv cv-trad">CV</a>
                    <a href=""><img src="images/linkedin_logo.png" alt="Voir son Linkedin"></a>
                    <a href=""><img src="images/insta_logo.png" alt="Voir son Instagram"></a>
            </div>

            <h2>Missions</h2>
                <ul class="missions" id="missions">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul> -->

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