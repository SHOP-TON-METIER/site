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
    <link rel="stylesheet" href="metier.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>

        <section class="avatar"></section>

        <section class="fiche">
            <?php
            $id = htmlentities($_GET['id']);

            $sql =
                'SELECT m.id_shop, m.nom, m.description, m.salaire, s.nom AS nomShop FROM metier AS m, shop as s WHERE m.id_shop = s.id AND m.id = :id';
            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            while ($data = $req->fetch()) {
                echo '
                <a href="shop.php?id=' .
                    $data['id_shop'] .
                    '" class="retour">
                    <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
                    </svg>
                </a>
                <p class="fil-Ariane"><a href="shop.php?id=' .
                    $data['id_shop'] .
                    '" class="current-domain">' .
                    $data['nomShop'] .
                    '</a> &nbsp &gt &nbsp <span>' .
                    $data['nom'] .
                    '</span></p>
                
                <h1>' .
                    $data['nom'] .
                    '</h1>

                <h2>Description</h2>

                <p>' .
                    $data['description'] .
                    '</p>

                <div class="boutons">
                    <div class="ajouter-panier">Ajouter au panier</div>
                    <div class="supprimer-panier">Supprimer du panier</div>

                    <div class="like">
                        <img src="medias/images/like.svg" alt="Aimer le métier"><span data-like="0"></span>
                    </div>
                </div>

                <h2>Salaire</h2>

                <p class="salaire" id="salaire">' .
                    $data['salaire'] .
                    '</p>
                ';
            }
            $req = null;
            ?>

            <?php
            $sql = "SELECT c.nom 
            FROM competence AS c, rel_metier_comp AS rmc, metier AS m
            WHERE rmc.id_metier = m.id 
            AND rmc.id_competence = c.id 
            AND m.id = :id 
            ORDER BY c.type, m.nom ASC";

            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            echo '<h2>Compétences</h2>
            <ul>';
            while ($data = $req->fetch()) {
                echo '
                <li>' .
                    $data['nom'] .
                    '</li>';
            }
            $req = null;
            echo '
            </ul>';
            ?>

            <?php
            $sql = 'SELECT poursuiteEtudes FROM metier WHERE id = :id';
            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            echo '
            <h2>Les poursuites d’études</h2>';
            while ($data = $req->fetch()) {
                echo '
                <p>' .
                    $data['poursuiteEtudes'] .
                    '</p>
                ';
            }
            $req = null;
            ?>

            <h2>Avis et conseils des anciens MMI</h2>

            <?php
            $sql =
                'SELECT * FROM ancienEtudiant WHERE id_metier = :id ORDER BY nom';
            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            while ($data = $req->fetch()) {
                echo '<div class="avis">
                        <span class="nom-etudiant">' .
                    $data['nom'] .
                    ' ' .
                    $data['prenom'] .
                    '</span><br>
                        <span class="adj-etudiant">' .
                    $data['adjectifs'] .
                    ' Promotion : ' .
                    $data['promotionMMI'] .
                    '</span>
                        <p class="avis-etudiant">' .
                    $data['avis'] .
                    '</p>
                        <p class="conseil-etudiant">Conseil : ' .
                    $data['conseil'] .
                    '</p>
                    </div>';
            }
            $req = null;
            ?>
            
        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>
    <script>
    $(document).ready(function() {
        // Click sur le bouton "like"
        const nb_like = $('.like span').data('like');
        $('.like span').html(nb_like);
        
        const click = false

        $('.like').on('click', function(){
            if (click == false){
                nb_like++;
                $('.like span').html(nb_like);
                $('.like img').attr('src','medias/images/liked-pink.svg')
                click = true;
            } else {
                nb_like--;
                $('.like span').html(nb_like);
                $('.like img').attr('src','medias/images/like.svg')
                click = false;
            }
        })

        if(!localStorage.getItem('shoptonmetier')) {
            localStorage.setItem('shoptonmetier','[]')
        }

        let idmetier = <?php echo $id; ?>

        if (JSON.parse(localStorage.getItem('shoptonmetier')).filter(metier => metier.id === idmetier).length !== 0){
            $('.ajouter-panier').css("display", "none")
            $('.supprimer-panier').css("display", "block")

        }       

        $('.ajouter-panier').on('click', function(){

            let panier = [];

            if(localStorage.getItem('shoptonmetier')){
                panier = JSON.parse(localStorage.getItem('shoptonmetier'));
            }
            
            <?php
            $sql =
                'SELECT m.id, m.nom, m.phraseAchat, m.id_shop, s.nom AS shop FROM metier AS m, shop as s WHERE m.id_shop = s.id AND m.id = :id';
            $req = $link->prepare($sql);
            $req->execute([':id' => $id]);

            while ($data = $req->fetch()) {
                echo 'panier.push({id : ' .
                    $data['id'] .
                    ', nom : "' .
                    $data['nom'] .
                    '", phrase : ' .
                    $data['phraseAchat'] .
                    ', shop : "' .
                    $data['shop'] .
                    '", id_shop :' .
                    $data['id_shop'] .
                    '})';
            }

            $req = null;
            ?>
            
            localStorage.setItem('shoptonmetier', JSON.stringify(panier));

            $('.ajouter-panier').css("display", "none")
            $('.supprimer-panier').css("display", "block")
        })

        $('.supprimer-panier').click(function(){

            let metierid = <?php echo $id; ?>

            let panier = JSON.parse(localStorage.getItem('shoptonmetier')).filter(metier => metier.id !== metierid)
            
            localStorage.setItem('shoptonmetier', JSON.stringify(panier));

            $('.ajouter-panier').css("display", "block")
            $('.supprimer-panier').css("display", "none")
        })


        })
    </script>
    
    <!-- Script pour l'objet 3D -->
    <script src="medias/js/three.min.js"></script>
    <script src="medias/js/DRACOLoader.js"></script>
    <script src="medias/js/GLTFLoader.js"></script>
    <script>
    const avatar = document.querySelector(".avatar")

    const WIDTH = avatar.offsetWidth
    const HEIGHT = avatar.offsetHeight

    const scene = new THREE.Scene()
    const camera = new THREE.PerspectiveCamera(70, WIDTH / HEIGHT, 0.001, 100)

    const keylight = new THREE.SpotLight(0xffac93, 1);
    keylight.position.set(-8, 12, 8);
    keylight.castShadow = true;
    scene.add(keylight);

    const filllight = new THREE.SpotLight(0xaea2f6, .8);
    filllight.position.set(6, 8, 8);
    filllight.castShadow = true;
    scene.add(filllight);

    const filllightbottom = new THREE.SpotLight(0xaea2f6, .5);
    filllightbottom.position.set(-6, -4, 8);
    filllightbottom.castShadow = true;
    scene.add(filllightbottom);

    const backlight = new THREE.SpotLight(0xffac93, 1);
    backlight.position.set(8, 4, -14);
    backlight.castShadow = true;
    scene.add(backlight);

    const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true
    })
    avatar.appendChild( renderer.domElement );
    renderer.setSize(WIDTH, HEIGHT)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    renderer.shadowMap.enabled = true;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.6;
    renderer.outputEncoding = THREE.sRGBEncoding;

    window.addEventListener('resize', () => {
    const WIDTH = avatar.offsetWidth
    const HEIGHT = avatar.offsetHeight

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
    $sql = 'SELECT id FROM metier WHERE id = :id';
    $req = $link->prepare($sql);
    $req->execute([':id' => $id]);

    while ($data = $req->fetch()) {
        echo "const url = 'medias/model/metier/" . $data['id'] . ".gltf'";
    }
    $req = null;
    ?>

    loader.load(
    url,

    function(gltf) {
        model = gltf.scene
        scene.add(model)

        const boundingBox = new THREE.Box3()
        boundingBox.setFromObject(model)

        const center = new THREE.Vector3()
        boundingBox.getCenter(center)

        center.y = center.y +2

        camera.position.y = center.y
        camera.position.x = center.x
        camera.updateProjectionMatrix()

        const size = new THREE.Vector3()
        boundingBox.getSize(size)

        const fov = camera.fov * (Math.PI / 180)
        const maxDim = Math.max(size.x, size.y, size.z)
        let cameraZ = Math.abs((maxDim / 4) * Math.tan(fov * 2))

        camera.position.z = cameraZ*3.6
        camera.updateProjectionMatrix()

        camera.lookAt(center)
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

        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            var winBottom = winTop + $(window).height();
            var top = $('footer').offset().top

            var translate = winBottom-top

            if(top <= winBottom){
                $(".avatar").css("transform", "translateY(-"+translate+"px)")
            }
        });
    })     
    </script>
</body>

</html>