<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Les différents métiers post MMI regroupés dans un site avec une navigation expérientielle !">
  <title>SHOP'TON MÉTIER</title>
  <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
  <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
  <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <canvas class="webgl"></canvas>

    <div class="intro">   

      <div class="drone"></div>
      <div class="skip">Passer l'intro ></div>
      <div class="messages">
        <p class="msg1">Salut, moi c'est Pepito&nbsp;! Bienvenue sur SHOP'TON MÉTIER.</p>
        <p class="msg2">
          Ce site te permettra de découvrir les métiers possibles après avoir
          étudié en MMI.
        </p>
        <p class="msg3">
          Chaque magasin que tu verras représente un domaine lié à MMI, je te
          laisse les découvrir :)
        </p>
        <p class="msg4">
          Clique sur un magasin pour y entrer et ainsi découvrir les différents
          métiers incarnés par les personnages&nbsp;!
        </p>
        <p class="msg5">
          Tu as la possibilité de cliquer sur ces personnages pour voir la fiche
          métier correspondante et aussi d'acheter ceux que tu préfères.
        </p>
        <p class="msg6">Tu connaîtras alors quel domaine te correspond le mieux !</p>
        <p>Je te souhaite une bonne visite&nbsp;!</p>
      </div>

      <div class="mask"></div>

      <div class="fade">
        <div class="top"></div>
        <div class="bottom"></div>
      </div>
    </div>

    <div class="left-click">
      <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
      </svg>
    </div>

    <div class="right-click">
      <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z" fill="#09192C"/>
      </svg>
    </div>
     
      <?php
      $id = 0;

      $sql =
          'SELECT * FROM shoptonmetier_chargement WHERE id_shop = :id ORDER BY RAND() LIMIT 1';
      $req = $link->prepare($sql);
      $req->execute([':id' => $id]);

      while ($data = $req->fetch()) {
          echo '
          <div class="loading">
              <p class="message-drone">' .
              $data['message'] .
              '</p>
              ';
      }
      $req = null;
      ?>
      <h1>SHOP'TON MÉTIER</h1>
      <div class="progressbar">
          <div class="progressbg"></div>
          <div class="progress"></div>
      </div>
      <p class="message-chargement">Allumage des lumières...</p>
    </div>

  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>

<script>
  $(function(){
    if(!localStorage.getItem('shoptonmetier')) {
      $(".intro").css("display", "flex")
      $(".loading").css("display", "none")
      $(".intro").css("cursor", "default")
      localStorage.setItem('shoptonmetier','[]')
      let animationmessages = anime.timeline({
        duration: 1500,
        easing: 'easeInOutSine',
      })
      animationmessages.add({
        targets: '.msg1',
        scale: '1.2',
        translateY: '-40vh'
      }).add({
        targets: '.msg1',
        scale: '1',
        translateY: '-100vh'
      }, '+=2500').add({
        targets: '.msg2',
        scale: '1.2',
        translateY: '-40vh'
      }, '-=1000').add({
        targets: '.msg2',
        scale: '1',
        translateY: '-100vh'
      }, '+=3500').add({
        targets: '.msg3',
        scale: '1.2',
        translateY: '-40vh'
      }, '-=1000').add({
        targets: '.msg3',
        scale: '1',
        translateY: '-100vh'
      }, '+=3500').add({
        targets: '.msg4',
        scale: '1.2',
        translateY: '-40vh'
      }, '-=1000').add({
        targets: '.msg4',
        scale: '1',
        translateY: '-100vh'
      }, '+=4500').add({
        targets: '.msg5',
        scale: '1.2',
        translateY: '-40vh'
      }, '-=1000').add({
        targets: '.msg5',
        scale: '1',
        translateY: '-100vh'
      }, '+=4500').add({
        targets: '.msg6',
        scale: '1.2',
        translateY: '-40vh'
      }, '-=1000').add({
        targets: '.intro',
        opacity: '0',
        display: 'none'
      },'+=1000').add({
        targets: 'header',
        opacity: '1',
        begin: function() {
          $('header').css("display", "flex")
          $(".intro").css("display", "none")
        }
      })
    

    $('.skip').on("click", function(){
      $(".intro").css("opacity", "0")
      $(".intro").css("pointerEvents", "none")
      window.setTimeout(function(){
        $(".intro").css("display", "none")
      },600)
      
    })
  }

  })
  
</script>
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
    scene.fog = new THREE.Fog(0xdff0ff, 0, 6)
    const camera = new THREE.PerspectiveCamera(48, WIDTH / HEIGHT, 0.1, 1000)
    camera.position.y = 0.34

    <?php if (isset($_GET['id'])) {
        $id = htmlentities($_GET['id']);
        echo 'let id = ' . $id;
    } else {
        echo 'let id =  1';
    } ?>

    if(id == 1){
      
      camera.rotation.y = Math.PI/6+3*Math.PI/3  
    }

    if(id == 2){
      camera.rotation.y = Math.PI/6+2*Math.PI/3
      
    }

    if(id == 3){
      camera.rotation.y = Math.PI/6+Math.PI/3      
    }

    if(id == 4){
      camera.rotation.y = Math.PI/6      
    }

    if(id == 5){      
      camera.rotation.y = Math.PI/6-Math.PI/3
    }

    if(id == 6){
      camera.rotation.y = Math.PI/6-2*Math.PI/3      
    }

    scene.add(camera)

    const light1 = new THREE.SpotLight(0xffffff, .7);
    light1.position.set(-10, 10, 10);
    light1.rotation.x = -1,0472
    light1.rotation.y = 0,785398
    light1.castShadow = true;
    scene.add(light1);

    const backlight1 = new THREE.SpotLight(0xffffff, .2);
    backlight1.position.set(-10, 2, 10);
    backlight1.rotation.x = 0,785398
    backlight1.rotation.y = -Math.PI/2
    backlight1.castShadow = true;
    scene.add(backlight1);

    const light2 = new THREE.SpotLight(0xffffff, .7);
    light2.position.set(10, 10, 10);
    light2.rotation.x = -0,785398
    light2.rotation.y = 1,0472
    light2.castShadow = true;
    scene.add(light2);

    const backlight2 = new THREE.SpotLight(0xffffff, .2);
    backlight2.position.set(10, 2, 10);
    backlight2.rotation.x = -0,785398
    backlight2.rotation.y = Math.PI/2
    backlight2.castShadow = true;
    scene.add(backlight2);

    const light3 = new THREE.SpotLight(0xffffff, .7);
    light3.position.set(10, 10, -10);
    light3.rotation.x = 0,785398
    light3.rotation.y = -1,0472
    light3.castShadow = true;
    scene.add(light3);

    const backlight3 = new THREE.SpotLight(0xffffff, .2);
    backlight3.position.set(10, 2, -10);
    backlight3.rotation.x = 0,785398
    backlight3.rotation.y = -1,0472
    backlight3.castShadow = true;
    scene.add(backlight3);

    const light4 = new THREE.SpotLight(0xffffff, .7);
    light4.position.set(-10, 10, -10);
    light4.rotation.x = Math.PI/2
    light4.rotation.y = 1,0472
    light4.castShadow = true;
    scene.add(light4);

    const backlight4 = new THREE.SpotLight(0xffffff, .2);
    backlight4.position.set(-10, 2, -10);
    backlight4.rotation.x = 0,785398
    backlight4.rotation.y = Math.PI/2
    backlight4.castShadow = true;
    scene.add(backlight4);

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true
    })
    renderer.setSize(WIDTH, HEIGHT)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    renderer.setClearColor(0xdff0ff)
    

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
    })
    }
    async function createScene(src) {
        const gltf = await modelLoader(src);

        scenemodel = gltf.scene
        scenemodel.receiveShadow = true
        scenemodel.scale.multiplyScalar(0.2)
        scenemodel.rotation.y = -Math.PI*2
        scenemodel.castShadow = true

        scene.add(scenemodel);
    }
    async function createShop(name, src, url, x, y, z, g){
        const gltf = await modelLoader(src)
        name = gltf.scene
        name.scale.multiplyScalar(0.24)
        name.position.set(x, y, z)
        name.rotation.y = g
        

        interactionManager.add(name)

        name.addEventListener("click", () => {
            window.location.href = `${url}`
        })

        name.addEventListener("mouseover", () => {
        document.body.style.cursor = "pointer"
        const coords = {
          i: name.scale.x,
          j: name.scale.y,
          k: name.scale.z
        };
        new TWEEN.Tween(coords)
          .to(
            {
              i: 0.238,
              j: 0.238,
              k: 0.238
            },
            500
          )
          .easing(TWEEN.Easing.Quadratic.InOut)
          .onUpdate(() => name.scale.set(coords.i, coords.j, coords.k))
          .start();
      });

      name.addEventListener("mouseout", () => {
        document.body.style.cursor = "auto";
        const coords = {
          i: name.scale.x,
          j: name.scale.y,
          k: name.scale.z
        };
        new TWEEN.Tween(coords)
          .to(
            {
              i: 0.23,
              j: 0.23,
              k: 0.23
            },
            500
          )
          .easing(TWEEN.Easing.Quadratic.InOut)
          .onUpdate(() => name.scale.set(coords.i, coords.j, coords.k))
          .start();
      });

      scene.add(name)
    }
    //Interactions
    interactionManager = new THREE.InteractionManager(renderer, camera, canvas)

    const leftclick = document.querySelector('.left-click svg')
    const rightclick = document.querySelector('.right-click svg')

    leftclick.addEventListener('click', () => {
      left()
    })

    rightclick.addEventListener('click', () => {
      right()
    })

    // Data
    function left(){
      leftclick.style.pointerEvents="none"
      rightclick.style.pointerEvents="none"
      window.setTimeout(function(){
        leftclick.style.pointerEvents="visible"
        rightclick.style.pointerEvents="visible"
      },1000)
      const coords = {
      y: camera.rotation.y,
      }
      new TWEEN.Tween(coords).to({
              y: camera.rotation.y+Math.PI/3,
          }, 1000)
          .easing(TWEEN.Easing.Quadratic.InOut)
          .onUpdate(() =>
              camera.rotation.y = coords.y).start()
    }

    function right(){
      leftclick.style.pointerEvents="none"
      rightclick.style.pointerEvents="none"
      window.setTimeout(function(){
        leftclick.style.pointerEvents="visible"
        rightclick.style.pointerEvents="visible"
      },1000)
      const coords = {
      y: camera.rotation.y,
      }
      new TWEEN.Tween(coords).to({
              y: camera.rotation.y-Math.PI/3,
          }, 1000)
          .easing(TWEEN.Easing.Quadratic.InOut)
          .onUpdate(() =>
              camera.rotation.y = coords.y).start()
    }



    const shops = {
      Audiovisuel: createShop('audiovisuel', 'medias/model/accueil/audiovisuel.gltf','shop.php?id=1', (1/2)*1.4, 0, (Math.sqrt(3)/2)*1.4, Math.PI/6 + Math.PI/2),
      Design: createShop('design', 'medias/model/accueil/design.gltf','shop.php?id=2',(-1/2)*1.4, 0, (Math.sqrt(3)/2)*1.4, Math.PI/3),
      Developpement: createShop('developpement','medias/model/accueil/developpement.gltf', 'shop.php?id=3', (-1)*1.4, 0, 0, 0),
      Communication: createShop('communication', 'medias/model/accueil/communication.gltf', 'shop.php?id=4', (-1/2)*1.4, 0, (-Math.sqrt(3)/2)*1.4, -Math.PI/3),
      MMI: createShop('mmi', 'medias/model/accueil/mmi.gltf', 'mmi.php?', (1/2)*1.4, 0, (-Math.sqrt(3)/2)*1.4, -Math.PI/6 + Math.PI/2 + Math.PI),
      Projet: createShop('projet', 'medias/model/accueil/projet.gltf', 'projet.php', (1)*1.4, 0, 0, Math.PI)
    }

    createScene('medias/model/accueil/scene5.gltf')

    // const sprites = [{
    //   position: new THREE.Vector3((1/2)*1.4, 0.7,(Math.sqrt(3)/2)*1.4),
    //   element: document.querySelector('.audiovisuel')
    // }, {
    //   position: new THREE.Vector3((-1/2)*1.4, 0.7, (Math.sqrt(3)/2)*1.4),
    //   element: document.querySelector('.design')
    // }, {
    //   position: new THREE.Vector3((-1)*1.4, 0.7, 0),
    //   element: document.querySelector('.developpement')
    // }, {
    //   position: new THREE.Vector3((-1/2)*1.4, 0.7, (-Math.sqrt(3)/2)*1.4),
    //   element: document.querySelector('.communication')
    // }, {
    //   position: new THREE.Vector3((1/2)*1.4, 0.7, (-Math.sqrt(3)/2)*1.4),
    //   element: document.querySelector('.mmi')
    // }, {
    //   position: new THREE.Vector3((1)*1.4, 0.7, Math.PI),
    //   element: document.querySelector('.projet')
    // }]

    //Drone


    //Loop
  function Animate(time) {
      interactionManager.update()
      TWEEN.update(time)

      //Sprites
      // for (const sprite of sprites) {
      //     const screenPosition = sprite.position.clone()
      //     screenPosition.project(camera)

      //     const translateX = screenPosition.x * window.innerWidth * 0.5
      //     const translateY = -screenPosition.y * window.innerHeight * 0.5
      //     sprite.element.style.transform = `translate(${translateX}px,${translateY}px)`

      // }
      renderer.render(scene, camera)

      requestAnimationFrame(Animate)
  }
    //Load
  window.addEventListener('load', Animate, false)

</script>




</body>

</html>