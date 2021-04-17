<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php include 'styles_header.php' ?>
</head>

<body>
    
    <?php include 'header.php' ?>

    <canvas>
    </canvas>

    <script src="js/three.min.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script>
        var camera, scene, renderer

        // SCENE
        function createScene() {
            scene = new THREE.Scene()

            // Sizes
            var WIDTH = window.innerWidth
            var HEIGHT = window.innerHeight

            // Camera
            camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT)
            camera.position.set(0, 0, 15)
            scene.add(camera)

            // Renderer
            const canvas = document.querySelector('canvas')
            renderer = new THREE.WebGLRenderer({
                canvas: canvas,
                //    alpha: true
            })

            renderer.setSize(WIDTH, HEIGHT)
            renderer.setClearColor(0xffffff)
            // canvas.appendChild(renderer.domElement)
        }


        // CREATE OBJECT
        function createObjects() {
            // le community manager
            const communityManager = new THREE.Mesh(
                new THREE.BoxGeometry(30, 30, 10),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            communityManager.position.set(-45, -5, -30)
            scene.add(communityManager)

            //chef de projet
            const chefProjet = new THREE.Mesh(
                new THREE.BoxGeometry(3, 8, 1),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            chefProjet.position.set(15, -5, -5)
            scene.add(chefProjet)
            
            //web marketer
            const webMarketer = new THREE.Mesh(
                new THREE.BoxGeometry(3, 8, 1),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            webMarketer.position.set(25, -5, -5)
            scene.add(webMarketer)

            //directeur artistique
            const dirArtistique = new THREE.Mesh(
                new THREE.BoxGeometry(3, 8, 1),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            dirArtistique.position.set(10, -5, -20)
            scene.add(dirArtistique)

            //tableau
            const tableau = new THREE.Mesh(
                new THREE.BoxGeometry(30, 20, 1),
                new THREE.MeshBasicMaterial({
                    color: 'yellow'
                })
            )
            tableau.position.set(10, 0, -30)
            scene.add(tableau)
        }



        function createControls() {
            // const controls = new THREE.OrbitControls(camera, renderer.domElement)
            controls = new THREE.MapControls(camera, renderer.domElement)
            controls.enableDamping = true
            controls.enableZoom = false
            controls.enableRotate = false
        }

        function loop() {
            controls.update()
            renderer.render(scene, camera)
            requestAnimationFrame(loop)
        }

        function init() {
            createScene()
            createObjects()
            createControls()
            loop()
        }

        window.addEventListener('load', init, false)
    </script>
</body>

</html>