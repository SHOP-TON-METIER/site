<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/images/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="shop.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    $id = htmlentities($_GET['id']);

    $sql = 'SELECT nom, msgDrone, html FROM shop  WHERE id_shop = :id';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo '
        <div class="loading">
            <p class="message-drone">' .
            $data['msgDrone'] .
            '</p>
            <h1>' .
            $data['nom'] .
            '</h1>
            <div class="progressbar">
                <div class="progressbg"></div>
                <div class="progress"></div>
            </div>
            <p class="message-chargement">Allumage des lumières...</p>
        </div>';
        // echo $data['html'];
    }
    $req = null;
    ?>

    
    <div class="sprite chargee_com">
        <a href="metier.php?id=1" class="plus">+</a>
        <div class="nom">Chargée de communication</div>
    </div>

    <div class="sprite community_manager">
        <a href="metier.php?id=2" class="plus">+</a>
        <div class="nom">Community manager</div>
    </div>

    <div class="sprite directrice_artistique">
        <a href="metier.php?id=1" class="plus">+</a>
        <div class="nom">Directrice artistique</div>
    </div>

    <div class="sprite webmarketeur">
        <a href="metier.php?id=1" class="plus">+</a>
        <div class="nom">Webmarketeur</div>
    </div>

    <div class="sprite chef_projet">
        <a href="metier.php?id=1" class="plus">+</a>
        <div class="nom">Chef de projet</div>
    </div>

    <canvas class="webgl"></canvas>

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

    <script src="medias/js/three.min.js"></script>
    <script src="medias/js/DRACOLoader.js"></script>
    <script src="medias/js/GLTFLoader.js"></script>
    <script src="medias/js/OrbitControls.js"></script>
    <script src="medias/js/three.interactive.js"></script>
    <script src="medias/js/tween.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script>
        //Setup
        const canvas = document.querySelector('canvas.webgl')
        const WIDTH = window.innerWidth
        const HEIGHT = window.innerHeight
        const scene = new THREE.Scene()
        const camera = new THREE.PerspectiveCamera(80, WIDTH / HEIGHT, 0.1, 1000)
        camera.position.y = 6
        camera.position.z = 6
        camera.rotation.x = -Math.PI / 4

        const keylight = new THREE.SpotLight(0xffffff, 1);
        keylight.position.set(-20, 10, 14);
        keylight.castShadow = true;
        scene.add(keylight);

        const filllight = new THREE.SpotLight(0xaea2f6, 0.5);
        filllight.position.set(16, 8, 12);
        filllight.castShadow = true;
        scene.add(filllight);

        const filllightbottom = new THREE.SpotLight(0xffffff, 0.5);
        filllightbottom.position.set(-20, -10, 10);
        filllightbottom.castShadow = true;
        scene.add(filllightbottom);

        const backlight = new THREE.SpotLight(0xffffff, 1);
        backlight.position.set(16, 8, -14);
        backlight.castShadow = true;
        scene.add(backlight);
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            antialias: true
        })
        renderer.setSize(WIDTH, HEIGHT)
        renderer.setClearColor(0xE0F8FF)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
        renderer.shadowMap.enabled = true;
        renderer.toneMapping = THREE.ACESFilmicToneMapping;
        renderer.toneMappingExposure = 1;
        renderer.outputEncoding = THREE.sRGBEncoding;

        //Resize
        window.addEventListener('resize', () => {
            const WIDTH = window.innerWidth
            const HEIGHT = window.innerHeight

            camera.aspect = WIDTH / HEIGHT
            camera.updateProjectionMatrix()

            renderer.setSize(WIDTH, HEIGHT)
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
        })

        //Loaders

        const loadingScreen = document.querySelector('.loading')
        const loadingBar = document.querySelector('.progress')
        const header = document.querySelector('.right')


        const loadingManager = new THREE.LoadingManager(
            () => {
                gsap.delayedCall(1, () => {
                    loadingScreen.style.opacity = 0
                    header.style.visibility = "visible"
                })
            },

            (itemUrl, itemsLoaded, itemsTotal) => {
                const progressRatio = 20 * (itemsLoaded / itemsTotal)
                loadingBar.style.width = `${progressRatio}vw`
            }
        )
        const dracoLoader = new THREE.DRACOLoader(loadingManager);
        dracoLoader.setDecoderPath('medias/draco/');

        const loader = new THREE.GLTFLoader(loadingManager);
        loader.setDRACOLoader(dracoLoader);

        function modelLoader(src) {
        return new Promise((resolve, reject) => {
            loader.load(src, data => resolve(data), null, reject);
        });
        }
        async function createScene(src) {
            const gltf = await modelLoader(src);

            scenemodel = gltf.scene
            scenemodel.receiveShadow = true
            scenemodel.scale.multiplyScalar(0.2)
            scenemodel.rotation.y = -Math.PI/2
            scenemodel.castShadow = true

            scene.add(scenemodel);
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

            model = gltf.scene
            model.position.set(x, y, z)
            model.rotation.y = g
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
        // <?php
// $sql = 'SELECT js FROM shop WHERE id_shop = :id';
// $req = $link->prepare($sql);
// $req->execute([':id' => $id]);

// while ($data = $req->fetch()) {
//     echo $data['js'];
// }
// $req = null;
//
?>
        
        createScene("medias/model/scene/design/scene.gltf")

        const characters = {
        Game_designer: createCharacter({name: 'game_designer', src: 'medias/model/scene/design/game_designer.gltf', url: 'metier.php?id=2', x: 0.5, y: 0, z: 2.8, g: -Math.PI/2}),
        Community_manager: createCharacter({name: 'community_manager', src: 'medias/model/scene/communication/community_manager.gltf', url: 'metier.php?id=1', x: -2, y: 0, z: 1.8, g: -Math.PI/2}),
        Directrice_artistique: createCharacter({name: 'directrice_artistique', src: 'medias/model/scene/communication/directrice_artistique.gltf', url: 'metier.php?id=1', x: 1.6, y: 0, z: -2.2, g: -Math.PI/2}),
        Webmarketeur: createCharacter({name: 'webmarketeur', src: 'medias/model/scene/communication/webmarketeur.gltf', url: 'metier.php?id=1', x: 4.2, y: 0, z: 1.2, g: -Math.PI/2}),
        Chef_projet: createCharacter({name: 'chef_projet', src: 'medias/model/scene/communication/chef_projet.gltf', url: 'metier.php?id=1', x: -3.6, y: 0, z: -1.8, g: -Math.PI/2})
        };

        const sprites = [
        {position: new THREE.Vector3(0.5, 2.8, 2.8), element: document.querySelector('.chargee_com')},
        {position: new THREE.Vector3(-1.8, 2.4, 1.8), element: document.querySelector('.community_manager')},
        {position: new THREE.Vector3(1.6, 2.8, -2.2), element: document.querySelector('.directrice_artistique')},
        {position: new THREE.Vector3(4.2, 2.4, 1.2), element: document.querySelector('.webmarketeur')},
        {position: new THREE.Vector3(-3.6, 2.7, -1.8), element: document.querySelector('.chef_projet')}
        ]

        //Interactions
        interactionManager = new THREE.InteractionManager(renderer, camera, canvas)


        //Controls
        const controls = new THREE.MapControls(camera, canvas)
        controls.enableDamping = true
        controls.enableZoom = false
        controls.enableRotate = false

        //Limit Pan
        const minPan = new THREE.Vector3(-2, -2, -2)
        const maxPan = new THREE.Vector3(2, 2, 1)
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

        //Load
        window.addEventListener('load', Animate, false)
    </script>

</body>

</html>