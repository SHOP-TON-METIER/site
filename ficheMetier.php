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

    <?php

$link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$sql = 'SELECT * FROM metier WHERE nom = "Graphiste"';

$req = $link -> prepare($sql);
$req -> execute();

echo '<ul>';
while($data = $req -> fetch()){
  echo '<li>'.$data['nom'].' '.'<b>'.$data['salaire'].'</b></li>';
}
$req = null;



$link = null;

?>



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

                <h1>Nom du métier</h1>

                <a class="add_button" href="#"></a>


            </div>
            

            <div>
                <h2>Le métier de ...</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam
                    reiciendis
                    labore
                    exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis
                    pariatur
                    sint
                    accusantium nostrum quas, inventore distinctio eius dicta molestiae commodi modi voluptas fugit
                    adipisci
                    eaque
                    delectus possimus vel! Dolor, inventore. Distinctio, est.
                </p>
            </div>
            <div>
                <h2>Les compétences nécessaires</h2>

                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </div>

            <div>
                <h2>Le salaire</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia earum neque ullam
                    reiciendis
                    labore
                    exercitationem fugit assumenda ipsa! Explicabo libero quibusdam ad facere enim impedit, facilis
                    pariatur
                    sint
                    accusantium nostrum quas, inventore distinctio eius dicta molestiae commodi modi voluptas fugit
                    adipisci
                    eaque
                    delectus possimus vel! Dolor, inventore. Distinctio, est.
                </p>
            </div>
            <div>
                <h2>Les poursuites d'étude</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos excepturi ea molestias libero
                    quo
                    repudiandae architecto quia debitis quos harum.
                </p>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
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
        <script>var camera, scene, renderer, avatar

            //CREATE SCENE
            
            function createScene() {
                WIDTH = 200
                HEIGHT = document.querySelector(".avatar").clientHeight
            
                scene = new THREE.Scene()
                camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT, 0.1, 1000)
                camera.position.z = 5.5
                scene.position.y = -2.5
            
            
                const ambientLight = new THREE.AmbientLight( 0xffffff, 2)
                scene.add(ambientLight)
            
                avatar = document.querySelector(".avatar")
            
                renderer = new THREE.WebGLRenderer({
                    antialias: true
                })
            
                renderer.setSize(WIDTH, HEIGHT)
                renderer.setClearColor( 0xffffff)
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
            
            function createObject(){
                const loader = new THREE.GLTFLoader();
                const url = 'gltf/characters/perso/scene.gltf'
            
                loader.load(
                    url,
            
                    function(gltf){
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
            
            function loop(){
                controls.update()
                renderer.render(scene, camera)            
                requestAnimationFrame(loop)
            }
                
            function init(){
                createScene()
                createControls()
                createObject()
                loop()
            }
            
            window.addEventListener('load', init, false)</script>
</body>

</html>