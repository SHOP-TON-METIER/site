<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_fiche_metier.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- id="popup" à connecter avec le bouton qui fait apparaitre la popup (href="#popup") -->
    <div id="popup" class="overlay">

        <div class="popup-content">
            <div class="croix">
                <img src="images/croix.png" alt="fermer">
            </div>
            <div class="avatar"></div>

            <div class="title">

                <h1 id="nom"></h1>

                <a class="add_button" href="#"></a>


            </div>


            <div>
                <h2 id="metier"></h2>
                <p id="description"></p>
            </div>
            <div>
                <h2>Les compétences nécessaires</h2>

                <ul id="competences"></ul>
            </div>

            <div>
                <h2>Le salaire</h2>
                <p id="salaire"></p>
            </div>
            <div>
                <h2>Les poursuites d'étude</h2>
                <ul id="formations"></ul>
            </div>
            <div class="ancien">
                <h2>Avis des anciens MMI</h2>

                <p class="avis">
                    <span>Michel</span><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam
                    reiciendis
                    labore
                    exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis
                    pariatur
                    sint
                </p>

                <p class="avis">
                    <span>Michel</span><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam
                    reiciendis
                    labore
                    exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis
                    pariatur
                    sint
                </p>

                <p class="avis">
                    <span>Michel</span><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam
                    reiciendis
                    labore
                    exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis
                    pariatur
                    sint
                </p>
            </div>

            <a href="#" class="add_panier">Ajouter au panier</a>

        </div>




        <script src="js/three.min.js"></script>
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
        </script>
</body>

</html>