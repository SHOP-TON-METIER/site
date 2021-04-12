<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_shop.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    
    <?php include 'header.php' ?>

    <canvas>
    </canvas>
    
    <script src="js/three.min.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script>
        var camera, scene, renderer // ajouter les autres objets ???

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
            // ingénieur 
            const ingenieur = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            ingenieur.position.set(15, -5, 0)
            scene.add(ingenieur)

            // dev front-end 
            const devFront = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            devFront.position.set(15, -5, -10)
            scene.add(devFront)

            // dev back-end 
            const devBack = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            devBack.position.set(-15, -5, -10)
            scene.add(devBack)

            // dev full-stack 
            const devFullStack = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            devFullStack.position.set(-15, -5, 0)
            scene.add(devFullStack)
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

</html