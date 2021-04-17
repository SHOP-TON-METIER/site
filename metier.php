<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON METIER</title>
    <link rel="stylesheet" href="styles_metier.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <?php include 'styles_header.php' ?>
</head>

<body>
    <?php include 'header.php' ?>
    <?php 
    // if (isset($_GET['id'])) {
        $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $sql = 
        'SELECT  
            m.nom AS nom_metier, 
            m.description, 
            m.salaire, 
            m.shop,
            rmc.competences, 
            etud.nom AS nom_etud, 
            etud.prenom AS prenom_etud, 
            etud.promotionMMI, 
            etud.avis, 
            f.nom AS nom_formation, 
            f.anneesEtudes
        FROM 
            metier AS m,
            rel_metier_comp AS rmc, 
            ancienetudiant AS etud, 
            formation AS f,
            rel_form_metier AS rfm
        WHERE 
            m.identifiant = rfm.id_metier
        AND f.identifiant_formation = rfm.id_formation
        AND m.identifiant = rmc.id_metier
        AND m.identifiant = etud.id_metier
        AND m.identifiant = 1;"';

        $req = $link -> prepare($sql);
        $req -> execute();


    // }    
    ?>

    <main>
        <canvas>
        </canvas>


    
        <section>
            <p class="fil-Ariane">
                <span class="current-domain">Audiovisuel</span>
                &nbsp;&gt;&nbsp;
                <?php
                    while($data = $req -> fetch()){
                        echo('<span>'.$data['nom_metier'].'</span>');
                    
                ?>
            </p>

                <?php 
                        echo('<h1>'.$data['nom_metier'].'</h1>');
                ?>


            <h2>Description</h2>
                <?php 
                        echo('<p>'.$data['description'].'</p>');
                    }
                // A mettre à la toute fin
                $req = null;
                ?>
            <!-- <p id="description"></p> -->

            <div class="boutons">
                <a href="#" class="ajouter-panier">Ajouter au panier</a>
                <span href="#" class="like">
                    <img src="images/coeur.svg" alt="Aimer le métier"> 20
                </span>
            </div>

            <h2>Salaire</h2>

            <p class="salaire" id="salaire"></p>

            <h2>Compétences</h2>

            <ul id="competences"></ul>

            <h2>Les poursuites d'études</h2>

            <ul id="formations"></ul>

            <h2>Avis des anciens MMI</h2>

            <p class="avis">
                <span>Michel</span><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam reiciendis labore
                exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis pariatur sint
            </p>

            <p class="avis">
                <span>Michel</span><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam reiciendis labore
                exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis pariatur sint
            </p>

            <p class="avis">
                <span>Michel</span><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam reiciendis labore
                exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis pariatur sint
            </p>

        </section>
    </main>

    <!-- <script src="js/three.min.js"></script>
    <script src="js/GLTFLoader.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script>
        var camera, scene, renderer, avatar

        //CREATE SCENE

        function createScene() {
            WIDTH = 200
            HEIGHT = document.querySelector(".avatar").clientHeight

            scene = new THREE.Scene()
            camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT, 0.1, 1000)
            camera.position.z = 5.5
            scene.position.y = -2.5


            const ambientLight = new THREE.AmbientLight(0xffffff, 2)
            scene.add(ambientLight)

            avatar = document.querySelector(".avatar")

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
            HEIGHT = document.querySelector(".avatar").clientHeight
            renderer.setSize(WIDTH, HEIGHT)
            camera.aspect = WIDTH / HEIGHT
            camera.updateProjectionMatrix()
        }

        //CREATE OBJECT

        function createObject() {
            const loader = new THREE.GLTFLoader();
            const url = 'gltf/characters/perso/scene.gltf'

            loader.load(
                url,

                function(gltf) {
                    model = gltf.scene
                    scene.add(model)
                }
            )
        }

        //CONTROLS

        function createControls() {
            controls = new THREE.OrbitControls(camera, renderer.domElement)
            controls.enableZoom = false
            controls.enablePan = false
            controls.enableDamping = true
            controls.minPolarAngle = Math.PI / 2
            controls.maxPolarAngle = Math.PI / 2
            controls.autoRotate = true
            controls.autoRotateSpeed = 10
        }

        function loop() {
            controls.update()
            renderer.render(scene, camera)
            requestAnimationFrame(loop)
        }

        function init() {
            createScene()
            createControls()
            createObject()
            loop()
        }

        window.addEventListener('load', init, false)
    </script>

    <script>
        var id = 2

        function get_metier(data) {
            console.log(data)
            var request = $.ajax({
                url: "api_metier.php",
                method: "GET",
                data: {
                    id: id,
                    type: "competences"
                },
                dataType: "JSON"
            })

            request.done(function(data) {
                $.each(data, function(index, item) {
                    $('#competences').append("<li>" + item.competences + "</li>")
                })
            }, get_competences)

            request.fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus)
            })
        }

        function get_competences(data) {
            console.log(data)
            var request = $.ajax({
                url: "api_metier.php",
                method: "GET",
                data: {
                    id: id,
                    type: "formations"
                },
                dataType: "JSON"
            })

            request.done(function(data) {
                $.each(data, function(index, item) {
                    $('#formations').append("<li>" + item.formation + "</li>")
                })
            }, get_formations)

            request.fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus)
            })
        }

        function get_formations(data) {
            console.log(data)
            var request = $.ajax({
                url: "api_metier.php",
                method: "GET",
                data: {
                    id: id,
                    type: "etudiants"
                },
                dataType: "JSON"
            })

            request.done(get_etudiants)

            request.fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus)
            })
        }

        function get_etudiants(data) {
            console.log(data)
        }
        $(document).ready(function($) {

            var request = $.ajax({
                url: "api_metier.php",
                method: "GET",
                data: {
                    id: id,
                    type: "metier"
                },
                dataType: "JSON"
            })

            request.done(function(data) {
                $('#nom').html(data[0].nom)
                $('#metier').html('Le metier de ' + data[0].nom.toLowerCase())
                $('#description').html(data[0].description)
                $('#salaire').html(data[0].salaire)
            }, get_metier)

            request.fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus)
            })
        });
    </script> -->
</body>

</html>