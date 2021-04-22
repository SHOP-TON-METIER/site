<!DOCTYPE html>
<html lang="fr">

<?php
$link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON METIER</title>
    <link rel="stylesheet" href="styles_perso.css">

    <!-- Charger fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Charger JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Charger icones -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <?php include 'styles_header.php'; ?>
</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <div class="avatar"></div>

        <section>

            <p class="fil-Ariane">
                <a href="./projet.php" class="current-domain">Projet</a>
                &nbsp &gt &nbsp <span>Clémentine GILAMA</span>
            </p>

            <h1>Clémentine <span class="nom-famille">GILAMA</span></h1>
            <p class="role">Communication et design</p>

            <h2>Présentation</h2>
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
                </ul>

        </section>
        
    </main>


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
            $req = $link -> prepare($sql);
            $req -> execute(array(":id" => $id));

            while ($data = $req -> fetch()) {
                echo("const url = 'gltf/".$data['code'].
                    "'");
            }
            $req = null;

            ?>

            loader.load(
                url,

                function (gltf) {
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