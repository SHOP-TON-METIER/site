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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="perso.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <a href="projet.php" class="retour">
            <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
            </svg>
        </a>
        <div class="maskavatar">
            <canvas class="avatar"></canvas>
        </div>
        

        <section>
            <?php
            $id = htmlentities($_GET['id']);

            $sql = 'SELECT * FROM staff  WHERE id = :id';
            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            while ($data = $req->fetch()) {
                echo '<p class="fil-Ariane">
                <a href="./projet.php" class="current-domain">Projet</a>
                &nbsp &gt &nbsp <span>' .
                    $data['prenom'] .
                    ' ' .
                    $data['nom'] .
                    '</span>
                </p>
                <h1>' .
                    $data['prenom'] .
                    '<br><span class="nom-famille">' .
                    $data['nom'] .
                    '</span></h1>
                <p class="role">' .
                    $data['roles'] .
                    '</p>
                <h2>Présentation</h2>
                <p>' .
                    $data['presentation'] .
                    '</p>
    
                <div class="boutons">
                        <a href="' .
                    $data['lienCvNum'] .
                    '" class="cv cv-num" target="_blank">CV interactif</a>
                        <a href="medias/cv/' .
                    $data['lienCvTrad'] .
                    '" class="cv cv-trad" target="_blank">CV</a>
                        <a href="' .
                    $data['lienLinkedin'] .
                    '" target="_blank"><svg width="66" height="66" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1901 0C4.58632 0 0 4.58622 0 10.1901V41.8116C0 47.4153 4.58622 52 10.1901 52H41.8116C47.4154 52 52 47.4154 52 41.8116V10.1901C52 4.58632 47.4154 0 41.8116 0H10.1901ZM12.753 8.58105C15.4399 8.58105 17.0949 10.3449 17.146 12.6635C17.146 14.9309 15.4398 16.7444 12.701 16.7444H12.6506C10.0149 16.7444 8.31131 14.931 8.31131 12.6635C8.31131 10.345 10.0665 8.58105 12.753 8.58105H12.753ZM35.9073 19.4179C41.0747 19.4179 44.9483 22.7953 44.9483 30.0532V43.6025H37.0953V30.9616C37.0953 27.7851 35.9588 25.618 33.1168 25.618C30.9473 25.618 29.6541 27.0787 29.0863 28.4897C28.8789 28.9946 28.8279 29.6996 28.8279 30.4058V43.6025H20.9749C20.9749 43.6025 21.078 22.1893 20.9749 19.972H28.8295V23.3184C29.8731 21.7083 31.7398 19.4178 35.9073 19.4178V19.4179ZM8.77452 19.9738H16.6275V43.6026H8.77452V19.9738V19.9738Z" fill="#2E8AF5"/>
                    </svg>
                    </a>
                        <a href="' .
                    $data['lienInsta'] .
                    '" target="_blank"><svg width="66" height="66" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M3.25035 3.53831C-0.835983 7.78281 0.000350352 12.2916 0.000350352 25.9893C0.000350352 37.3643 -1.98432 48.7675 8.40268 51.452C11.6462 52.2861 40.3849 52.2861 43.624 51.4476C47.9487 50.3318 51.4673 46.824 51.9483 40.7075C52.0155 39.8538 52.0155 12.14 51.9462 11.269C51.4349 4.75381 47.4243 0.998975 42.1398 0.238475C40.9287 0.0629746 40.686 0.0109745 34.472 0.000141215C12.4305 0.0109745 7.59885 -0.970526 3.25035 3.53831V3.53831Z" fill="url(#paint0_linear)"/>
                    <path d="M25.9956 6.80076C18.1284 6.80076 10.6578 6.10092 7.80426 13.4243C6.62559 16.4489 6.79676 20.3771 6.79676 26.0018C6.79676 30.9374 6.63859 35.5763 7.80426 38.5771C10.6513 45.9048 18.1826 45.2028 25.9913 45.2028C33.5248 45.2028 41.2923 45.9871 44.1804 38.5771C45.3613 35.5221 45.1879 31.6524 45.1879 26.0018C45.1879 18.5008 45.6018 13.6583 41.9639 10.0226C38.2806 6.33926 33.2994 6.80076 25.9869 6.80076H25.9956ZM24.2753 10.2609C40.6856 10.2349 42.7743 8.41059 41.6216 33.7541C41.2121 42.7176 34.3871 41.7339 25.9978 41.7339C10.7011 41.7339 10.2613 41.2963 10.2613 25.9931C10.2613 10.5123 11.4746 10.2696 24.2753 10.2566V10.2609ZM36.2439 13.4481C34.9721 13.4481 33.9408 14.4794 33.9408 15.7513C33.9408 17.0231 34.9721 18.0544 36.2439 18.0544C37.5158 18.0544 38.5471 17.0231 38.5471 15.7513C38.5471 14.4794 37.5158 13.4481 36.2439 13.4481V13.4481ZM25.9956 16.1413C20.5508 16.1413 16.1373 20.5569 16.1373 26.0018C16.1373 31.4466 20.5508 35.8601 25.9956 35.8601C31.4404 35.8601 35.8518 31.4466 35.8518 26.0018C35.8518 20.5569 31.4404 16.1413 25.9956 16.1413V16.1413ZM25.9956 19.6014C34.4564 19.6014 34.4673 32.4021 25.9956 32.4021C17.5369 32.4021 17.5239 19.6014 25.9956 19.6014Z" fill="white"/>
                    </g>
                    <defs>
                    <linearGradient id="paint0_linear" x1="3.35006" y1="48.6788" x2="51.6786" y2="6.85109" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFDD55"/>
                    <stop offset="0.5" stop-color="#FF543E"/>
                    <stop offset="1" stop-color="#C837AB"/>
                    </linearGradient>
                    <clipPath id="clip0">
                    <rect width="52" height="52" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    </a>
                </div>
    
                <h2>Missions</h2>
                    <ul class="missions" id="missions">' .
                    $data['missions'] .
                    '</ul>';
            }
            $req = null;
            ?>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>
    <script src="medias/js/navbar.js"></script>


    <!-- Script pour l'objet 3D -->
    <script src="medias/js/three.min.js"></script>
    <script src="medias/js/DRACOLoader.js"></script>
    <script src="medias/js/GLTFLoader.js"></script>
    <script src="medias/js/OrbitControls.js"></script>
    <script>
    const avatar = document.querySelector(".avatar")

    const WIDTH = avatar.offsetWidth*1.4
    const HEIGHT = avatar.offsetHeight*1.4

    const scene = new THREE.Scene()
    const camera = new THREE.PerspectiveCamera(65, WIDTH / HEIGHT, 0.001, 100)
    camera.position.z = 4

    const keylight = new THREE.SpotLight(0xffac93, 1);
    keylight.position.set(-20, 14, 14);
    keylight.castShadow = true;
    scene.add(keylight);

    const filllight = new THREE.SpotLight(0xaea2f6, .8);
    filllight.position.set(16, 10, 14);
    filllight.castShadow = true;
    scene.add(filllight);

    const filllightbottom = new THREE.SpotLight(0xaea2f6, .5);
    filllightbottom.position.set(-20, -16, 14);
    filllightbottom.castShadow = true;
    scene.add(filllightbottom);

    const backlight = new THREE.SpotLight(0xffac93, 1);
    backlight.position.set(16, 10, -14);
    backlight.castShadow = true;
    scene.add(backlight);

    const backlight2 = new THREE.SpotLight(0xffac93, 1);
    backlight2.position.set(-16, 10, -14);
    backlight2.castShadow = true;
    scene.add(backlight2);

    const renderer = new THREE.WebGLRenderer({
        canvas: avatar,
        antialias: true,
        alpha: true
    })
    renderer.setSize(WIDTH, HEIGHT)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio*1.6, 2))
    renderer.shadowMap.enabled = true;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 2;
    renderer.outputEncoding = THREE.sRGBEncoding;

    window.addEventListener('resize', () => {
        const WIDTH = 0.364*window.innerWidth
        const HEIGHT = 1.12*window.innerHeight

        camera.aspect = WIDTH / HEIGHT
        camera.updateProjectionMatrix()

        renderer.setSize(WIDTH, HEIGHT)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    })

    const dracoLoader = new THREE.DRACOLoader();
    dracoLoader.setDecoderPath('medias/draco/');

    const loader = new THREE.GLTFLoader();
    loader.setDRACOLoader(dracoLoader);

    <?php
    $sql = 'SELECT perso3D FROM staff WHERE id = :id';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo "const url = 'medias/model/staff/" . $data['perso3D'] . "'";
    }
    $req = null;
    ?>

    loader.load(
        url,

        function(gltf) {
            model = gltf.scene
            model.scale.multiplyScalar(0.28)
            model.position.y= -2
            scene.add(model)
        }
    )

    function lerp(a, b, t) {
        return ((1 - t) * a + t * b)
    }

    let scroll = 0

    function Animate() {
        scroll = lerp(scroll, document.documentElement.scrollTop, .1)          
        scene.rotation.y = 2*Math.PI * scroll / (document.documentElement.scrollHeight-document.documentElement.clientHeight)

        renderer.render(scene, camera)
        requestAnimationFrame(Animate)
    }
    window.addEventListener('load', Animate, false)
    </script>
    <script>
    $(document).ready(function() {
        var winTop = $(window).scrollTop();
        var winBottom = winTop + $(window).height();
        var top = $('footer').offset().top

        var translate = winBottom-top

        if(top <= winBottom){
            $(".maskavatar").css("transform", "translateY(-"+translate+"px)")
        }
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            var winBottom = winTop + $(window).height();
            var top = $('footer').offset().top

            var translate = winBottom-top

            if(top <= winBottom){
                $(".maskavatar").css("transform", "translateY(-"+translate+"px)")
            }
        });
    })     
    </script>
</body>

</html>