<!DOCTYPE html>
<html lang="fr">

<?php
$link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include 'header.php' ?>

    <canvas class="webgl"></canvas>

    <?php
    $id = htmlentities($_GET['id']);

    $sql = "SELECT html FROM shop  WHERE id_shop = :id";
    $req = $link->prepare($sql);
    $req->execute(array(":id" => $id));

    while ($data = $req->fetch()) {
        echo ($data['html']);
    }
    $req = null;
    ?>

    <script src="js/three.min.js"></script>
    <script src="js/GLTFLoader.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script src="js/three.interactive.js"></script>
    <script src="js/tween.umd.js"></script>
    <script>
        //Setup
        const canvas = document.querySelector('canvas.webgl')
        const WIDTH = window.innerWidth
        const HEIGHT = window.innerHeight
        const scene = new THREE.Scene()
        const camera = new THREE.PerspectiveCamera(80, WIDTH / HEIGHT, 0.1, 1000)
        camera.position.y = 4
        camera.position.z = 4
        camera.rotation.x = -Math.PI / 4

        const light = new THREE.HemisphereLight(0xffffff, 0xffffff, 5)
        light.position.set(0, 1, 0)
        scene.add(light)
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            antialias: true
        })
        renderer.setSize(WIDTH, HEIGHT)
        renderer.setClearColor(0xCCE7FF)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

        //Resize
        window.addEventListener('resize', () => {
            const WIDTH = window.innerWidth
            const HEIGHT = window.innerHeight

            camera.aspect = WIDTH / HEIGHT
            camera.updateProjectionMatrix()

            renderer.setSize(WIDTH, HEIGHT)
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
        })

        //Decor
        const decorgeometry = new THREE.PlaneGeometry(20, 20, 1)
        const decormaterial = new THREE.MeshBasicMaterial({
            color: 0xCCE7FF,
            side: THREE.DoubleSide
        })
        const decor = new THREE.Mesh(decorgeometry, decormaterial)
        decor.rotation.x = Math.PI / 2
        scene.add(decor)


        //Characters
        const loader = new THREE.GLTFLoader()

        function modelLoader(src) {
            return new Promise((resolve, reject) => {
                loader.load(src, data => resolve(data), null, reject)
            })
        }

        async function createCharacter({
            name,
            src,
            url,
            x,
            y,
            z,
            g
        }) {
            const gltf = await modelLoader(src)

            model = gltf.scene.children[0]
            model.position.set(x, y, z)
            model.rotation.z = g
            model.scale.multiplyScalar(0.2)
            scene.add(model)

            interactionManager.add(model)

            model.addEventListener("click", () => {
                window.location.href = `${url}`
            })

            model.addEventListener("mouseover", () => {
                document.body.style.cursor = "pointer"
                document.querySelector(`.${name}`).classList.add("active")
            })

            model.addEventListener("mouseout", () => {
                document.body.style.cursor = "auto"
                document.querySelector(`.${name}`).classList.remove("active")


            })

            return model
        }


        // Data
        <?php
        $sql = "SELECT js FROM shop WHERE id_shop = :id";
        $req = $link->prepare($sql);
        $req->execute(array(":id" => $id));

        while ($data = $req->fetch()) {
            echo ($data['js']);
        }
        $req = null;

        ?>

        //Interactions
        interactionManager = new THREE.InteractionManager(renderer, camera, canvas)


        //Controls
        const controls = new THREE.MapControls(camera, canvas)
        controls.enableDamping = true
        controls.enableZoom = false
        controls.enableRotate = false

        //Limit Pan
        const minPan = new THREE.Vector3(-4, -4, -4)
        const maxPan = new THREE.Vector3(4, 4, 4)
        const v = new THREE.Vector3()
        controls.addEventListener("change", function() {
            v.copy(controls.target)
            controls.target.clamp(minPan, maxPan)
            v.sub(controls.target)
            camera.position.sub(v)
        })

        //Loop
        function Animate(time) {

            controls.update()
            interactionManager.update()
            TWEEN.update(time)

            //Sprites
            for (const sprite of sprites) {
                const screenPosition = sprite.position.clone()
                screenPosition.project(camera)

                const translateX = screenPosition.x * window.innerWidth * 0.5
                const translateY = -screenPosition.y * window.innerHeight * 0.5
                sprite.element.style.transform = `translate(${translateX}px,${translateY}px)`

            }
            renderer.render(scene, camera)

            requestAnimationFrame(Animate)
        }

        //Init
        function Init() {
            Animate()
        }

        //Load
        window.addEventListener('load', Init, false)
    </script>

</body>

</html>