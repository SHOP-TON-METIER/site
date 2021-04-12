<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_shop.css">
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
            // table principale avec les métiers d'infographiste, UI designer, UX designer et product designer autour
            const table = new THREE.Mesh(
                new THREE.BoxGeometry(15, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            table.position.set(10, -5, -3)
            scene.add(table)
            
            // UI Designer
            const uiDesigner = new THREE.Mesh(
                new THREE.BoxGeometry(3, 10, 1),
                new THREE.MeshBasicMaterial({
                    color: 'yellow'
                })
            )
            uiDesigner.position.set(10, -3, -11)
            scene.add(uiDesigner)

            // UX Designer    
            const uxDesigner = new THREE.Mesh(
                new THREE.BoxGeometry(3, 10, 1),
                new THREE.MeshBasicMaterial({
                    color: 'yellow'
                })
            )
            uxDesigner.position.set(20, -3, -3)
            scene.add(uxDesigner)

            const productDesigner = new THREE.Mesh(
                new THREE.BoxGeometry(3, 10, 1),
                new THREE.MeshBasicMaterial({
                    color: 'yellow'
                })
            )
            productDesigner.position.set(10, -3, -1)
            scene.add(productDesigner)

            // Infographiste
            const infographiste = new THREE.Mesh(
                new THREE.BoxGeometry(3, 10, 1),
                new THREE.MeshBasicMaterial({
                    color: 'yellow'
                })
            )
            infographiste.position.set(0, -3, -3)
            scene.add(infographiste)

            // web designer
            const webDesigner = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            webDesigner.position.set(-20, -3, -10)
            scene.add(webDesigner)

            // web designer
            const webDesigner = new THREE.Mesh(
                new THREE.BoxGeometry(6, 4, 3),
                new THREE.MeshBasicMaterial({
                    color: 'red'
                })
            )
            webDesigner.position.set(-20, -3, -10)
            scene.add(webDesigner)
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