<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="shop.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    

    <?php
    $id = htmlentities($_GET['id']);

    $sql =
        'SELECT * FROM shoptonmetier_chargement WHERE id_shop = :id ORDER BY RAND() LIMIT 1';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo '<a href="index.php?id=' .
            $id .
            '" class="retour">
        <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
        </svg>
        </a>
        <div class="loading">
            <p class="message-drone">' .
            $data['message'] .
            '</p>
            ';
    }
    $req = null;
    ?>

    <?php
    $sql = 'SELECT nom, html FROM shoptonmetier_shop WHERE id = :id';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo '<h1>' .
            $data['nom'] .
            '</h1>
            <div class="progressbar">
                <div class="progressbg"></div>
                <div class="progress"></div>
            </div>
            <p class="message-chargement">Allumage des lumières...</p>
        </div>';
        echo $data['html'];
    }
    $req = null;
    ?>

    <canvas class="webgl"></canvas>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>
    <script src="medias/js/pastille.js"></script>

    <script src="medias/js/three.min.js"></script>
    <script src="medias/js/DRACOLoader.js"></script>
    <script src="medias/js/GLTFLoader.js"></script>
    <script src="medias/js/OrbitControls.js"></script>
    <script src="medias/js/three.interactive.js"></script>
    <script src="medias/js/tween.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script>
    //Setup
    const canvas = document.querySelector('.webgl')
    const WIDTH = window.innerWidth
    const HEIGHT = window.innerHeight
    const scene = new THREE.Scene()
    const camera = new THREE.PerspectiveCamera(80, WIDTH / HEIGHT, 0.1, 1000)
    camera.rotation.x = -Math.PI / 4
    scene.add(camera)

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
            cameraintro()
            window.setTimeout(function(){
                canvas.style.pointerEvents="visible"
            },3000)
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
    }
    //Interactions
    interactionManager = new THREE.InteractionManager(renderer, camera, canvas)

    //Controls
    const controls = new THREE.MapControls(camera, canvas)
    controls.enableDamping = true
    controls.enableZoom = false
    controls.enableRotate = false

    //Limit Pan
    const minPan = new THREE.Vector3(-4, -4, -2)
    const maxPan = new THREE.Vector3(4, 4, 1)
    const v = new THREE.Vector3()
    controls.addEventListener("change", function() {
    v.copy(controls.target)
    controls.target.clamp(minPan, maxPan)
    v.sub(controls.target)
    camera.position.sub(v)
    })

    // Data
    <?php
    $sql = 'SELECT js FROM shoptonmetier_shop WHERE id = :id';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo $data['js'];
    }
    $req = null;
    ?>

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