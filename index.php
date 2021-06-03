<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Les différents métiers post MMI regroupés dans un site avec une naviguation expérientielle !">
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
      <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z" fill="#09192C" />
      </svg>
      <div class="drone">
            <svg width="660" height="266" viewBox="0 0 660 266" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M63.5787 176.284L63.5787 191.646H42.7222L42.7222 255H23.5477L23.5477 191.646H2.69116L2.69116 176.284H63.5787ZM110.43 255.785C103.029 255.785 96.2263 254.066 90.0216 250.627C83.8918 247.188 78.9954 242.404 75.3324 236.274C71.7442 230.069 69.9501 223.117 69.9501 215.417C69.9501 207.718 71.7442 200.803 75.3324 194.673C78.9954 188.543 83.8918 183.759 90.0216 180.32C96.2263 176.882 103.029 175.162 110.43 175.162C117.83 175.162 124.596 176.882 130.725 180.32C136.93 183.759 141.789 188.543 145.303 194.673C148.891 200.803 150.685 207.718 150.685 215.417C150.685 223.117 148.891 230.069 145.303 236.274C141.714 242.404 136.855 247.188 130.725 250.627C124.596 254.066 117.83 255.785 110.43 255.785ZM110.43 238.292C116.709 238.292 121.718 236.199 125.455 232.013C129.268 227.827 131.174 222.295 131.174 215.417C131.174 208.465 129.268 202.933 125.455 198.822C121.718 194.636 116.709 192.543 110.43 192.543C104.075 192.543 98.9922 194.598 95.1797 198.71C91.442 202.821 89.5731 208.391 89.5731 215.417C89.5731 222.37 91.442 227.939 95.1797 232.125C98.9922 236.237 104.075 238.292 110.43 238.292ZM231.771 255L212.597 255L180.527 206.447L180.527 255H161.352L161.352 176.284H180.527L212.597 225.061V176.284H231.771L231.771 255ZM358.577 176.284V255H339.403V207.793L321.798 255H306.324L288.607 207.68V255H269.432V176.284H292.083L314.173 230.78L336.039 176.284H358.577ZM391.54 191.646V207.568H417.219V222.37H391.54V239.638H420.583V255H372.366V176.284H420.583V191.646H391.54ZM409.033 160.473L382.009 171.798V158.567L409.033 145.559V160.473ZM489.657 176.284V191.646H468.801V255H449.626V191.646H428.77V176.284L489.657 176.284ZM518.455 176.284V255H499.281V176.284H518.455ZM551.525 191.646V207.568H577.203V222.37H551.525V239.638L580.567 239.638V255L532.351 255V176.284H580.567V191.646H551.525ZM633.159 255L616.788 225.285H612.19V255H593.016V176.284L625.198 176.284C631.402 176.284 636.672 177.367 641.008 179.535C645.419 181.703 648.708 184.693 650.876 188.506C653.044 192.244 654.128 196.43 654.128 201.065C654.128 206.297 652.632 210.97 649.642 215.081C646.727 219.193 642.391 222.108 636.635 223.827L654.8 255H633.159ZM612.19 211.717H624.076C627.59 211.717 630.206 210.857 631.925 209.138C633.72 207.419 634.617 204.989 634.617 201.85C634.617 198.859 633.72 196.505 631.925 194.785C630.206 193.066 627.59 192.206 624.076 192.206H612.19V211.717Z" fill="#09192C"/>
        <path d="M53.1504 135.177C44.5163 135.177 36.7792 133.776 29.9392 130.972C23.0991 128.169 17.6047 124.02 13.4558 118.526C9.41907 113.031 7.28856 106.416 7.0643 98.6785H37.6763C38.1248 103.052 39.6386 106.416 42.2176 108.77C44.7966 111.013 48.1606 112.134 52.3095 112.134C56.5705 112.134 59.9344 111.181 62.4013 109.275C64.8682 107.257 66.1017 104.509 66.1017 101.033C66.1017 98.1178 65.0925 95.707 63.0741 93.8008C61.1679 91.8945 58.757 90.3247 55.8416 89.0912C53.0383 87.8578 49.0016 86.4561 43.7314 84.8863C36.1064 82.5315 29.8831 80.1768 25.0614 77.822C20.2398 75.4672 16.0909 71.9911 12.6148 67.3937C9.13874 62.7963 7.4007 56.7973 7.4007 49.3966C7.4007 38.4077 11.3814 29.8296 19.3427 23.6624C27.3041 17.383 37.6763 14.2433 50.4593 14.2433C63.4666 14.2433 73.9509 17.383 81.9122 23.6624C89.8736 29.8296 94.1346 38.4638 94.6953 49.5648L63.5787 49.5648C63.3544 45.7523 61.9528 42.7808 59.3738 40.6503C56.7947 38.4077 53.4868 37.2864 49.4501 37.2864C45.974 37.2864 43.1707 38.2395 41.0402 40.1457C38.9097 41.9398 37.8445 44.5749 37.8445 48.051C37.8445 51.8635 39.6386 54.835 43.2268 56.9655C46.815 59.096 52.4216 61.3947 60.0466 63.8616C67.6715 66.4406 73.8388 68.9075 78.5483 71.2623C83.37 73.6171 87.5188 77.0371 90.9949 81.5223C94.471 86.0076 96.209 91.7824 96.209 98.8467C96.209 105.575 94.471 111.686 90.9949 117.18C87.631 122.675 82.6972 127.048 76.1935 130.3C69.6899 133.551 62.0089 135.177 53.1504 135.177ZM216.173 15.9253L216.173 134H187.412L187.412 85.3909H142.671L142.671 134H113.909L113.909 15.9253L142.671 15.9253V62.1796L187.412 62.1796V15.9253L216.173 15.9253ZM292.778 135.177C281.677 135.177 271.473 132.598 262.166 127.44C252.971 122.282 245.627 115.106 240.132 105.911C234.75 96.6041 232.059 86.1758 232.059 74.6262C232.059 63.0767 234.75 52.7045 240.132 43.5097C245.627 34.3149 252.971 27.1384 262.166 21.9804C271.473 16.8223 281.677 14.2433 292.778 14.2433C303.879 14.2433 314.027 16.8223 323.222 21.9804C332.529 27.1384 339.817 34.3149 345.088 43.5097C350.47 52.7045 353.161 63.0767 353.161 74.6262C353.161 86.1758 350.47 96.6041 345.088 105.911C339.705 115.106 332.417 122.282 323.222 127.44C314.027 132.598 303.879 135.177 292.778 135.177ZM292.778 108.939C302.197 108.939 309.71 105.799 315.317 99.5195C321.035 93.2401 323.895 84.9424 323.895 74.6262C323.895 64.198 321.035 55.9002 315.317 49.733C309.71 43.4536 302.197 40.3139 292.778 40.3139C283.247 40.3139 275.622 43.3975 269.903 49.5648C264.297 55.732 261.493 64.0859 261.493 74.6262C261.493 85.0545 264.297 93.4083 269.903 99.6877C275.622 105.855 283.247 108.939 292.778 108.939ZM459.148 53.9379C459.148 60.778 457.578 67.0573 454.438 72.7761C451.299 78.3827 446.477 82.924 439.973 86.4001C433.47 89.8762 425.396 91.6142 415.753 91.6142H397.924V134H369.162V15.9253L415.753 15.9253C425.172 15.9253 433.133 17.5512 439.637 20.803C446.141 24.0548 451.018 28.5401 454.27 34.2588C457.522 39.9775 459.148 46.5372 459.148 53.9379ZM413.566 68.7393C419.061 68.7393 423.154 67.4498 425.845 64.8708C428.536 62.2917 429.882 58.6475 429.882 53.9379C429.882 49.2284 428.536 45.5841 425.845 43.0051C423.154 40.4261 419.061 39.1365 413.566 39.1365H397.924V68.7393H413.566ZM480.681 15.9253L510.116 15.9253L491.278 61.0022H471.935L480.681 15.9253Z" fill="#FA5014"/>
        </svg>

      </div>
      <div class="skip">Passer l'intro ></div>
      <div class="messages">
        <p class="msg1">Salut, moi c'est Pepito! Bienvenue sur SHOP'TON METIER.</p>
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
          métiers incarnés par les personnages !
        </p>
        <p class="msg5">
          Tu as la possibilité de cliquer sur ces personnages pour voir la fiche
          métier correspondante et aussi d'acheter ceux que tu préfères.
        </p>
        <p class="msg6">Tu connaîtras alors quel domaine te correspond le mieux !</p>
        <p>Je te souhaite une bonne visite !</p>
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
          'SELECT * FROM chargement WHERE id_shop = :id ORDER BY RAND() LIMIT 1';
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


    <div class="sprite audiovisuel">
      <a href="shop.php?id=1" class="plus">+</a>
      <div class="nom">Audiovisuel</div>
    </div>

    <div class="sprite design">
      <a href="shop.php?id=2" class="plus">+</a>
      <div class="nom">Design</div>
    </div>

    <div class="sprite developpement">
      <a href="shop.php?id=3" class="plus">+</a>
      <div class="nom">Développement</div>
    </div>

    <div class="sprite communication">
      <a href="shop.php?id=4" class="plus">+</a>
      <div class="nom">Communication</div>
    </div>

    <div class="sprite mmi">
      <a href="shop.php?id=4" class="plus">+</a>
      <div class="nom">MMI</div>
    </div>

    <div class="sprite projet">
      <a href="shop.php?id=4" class="plus">+</a>
      <div class="nom">Projet</div>
    </div>

  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>

<script>
  $(function(){
    if(!localStorage.getItem('shoptonmetier')) {
      $(".intro").css("display", "flex")
      $(".loading").css("display", "none")
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
          opacity: '0'
        },'+=1000').add({
          duration: 500,
          targets: 'header',
          opacity: '1',
          begin: function() {
            $('header').css("display", "flex")
          }
        })
      }

    $('.skip').on("click", function(){
      $(".intro").css("opacity", "0")
      $(".intro").css("pointerEvents", "none")
    })

  })
  
</script>
  <script src="medias/js/app.js"></script>
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
    const camera = new THREE.PerspectiveCamera(54, WIDTH / HEIGHT, 0.1, 1000)

    <?php
    $id = htmlentities($_GET['id']);
    echo 'let id = ' . $id;
    ?>

    camera.rotation.y = Math.PI/6

    if(id == 1){
      camera.rotation.y = Math.PI/6-2*Math.PI/3
    }

    if(id == 2){
      camera.rotation.y = Math.PI/6+3*Math.PI/3
    }

    if(id == 3){
      camera.rotation.y = Math.PI/6+2*Math.PI/3
      
    }

    if(id == 4){
      camera.rotation.y = Math.PI/6+Math.PI/3
    }

    if(id == 5){
      camera.rotation.y = Math.PI/6
    }

    if(id == 6){
      camera.rotation.y = Math.PI/6-Math.PI/3
    }

    scene.add(camera)

    const keylight = new THREE.SpotLight(0xffffff, 1);
    keylight.position.set(-100, 70, 70);
    keylight.castShadow = true;
    scene.add(keylight);

    const filllight = new THREE.SpotLight(0xaea2f6, .8);
    filllight.position.set(80, 50, 70);
    filllight.castShadow = true;
    scene.add(filllight);

    const filllightbottom = new THREE.SpotLight(0xffffff, .5);
    filllightbottom.position.set(-100, -80, 70);
    filllightbottom.castShadow = true;
    scene.add(filllightbottom);

    const backlight = new THREE.SpotLight(0xffffff, 1);
    backlight.position.set(80, 50, -70);
    backlight.castShadow = true;
    scene.add(backlight);

    const backlight2 = new THREE.SpotLight(0xffac93, 1);
    backlight2.position.set(-80, 50, -70);
    backlight2.castShadow = true;
    scene.add(backlight2);

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true
    })
    renderer.setSize(WIDTH, HEIGHT)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    renderer.setClearColor(0xffffff)
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
        scenemodel.rotation.y = -Math.PI*2
        scenemodel.castShadow = true

        scene.add(scenemodel);
    }

    async function createShop({
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
        model.scale.multiplyScalar(0.2)
        model.position.set(x, y, z)
        model.rotation.y = g
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

    const leftclick = document.querySelector('.left-click svg')
    const rightclick = document.querySelector('.right-click svg')

    leftclick.addEventListener('click', () => {
      left()
    })

    rightclick.addEventListener('click', () => {
      right()
    })

    // Data
    function cameraintro(){
      const coords = {
      y: 4,
      z: 4
      }
      new TWEEN.Tween(coords).to({
              y: 0.3,
              z: 0,
          }, 3000)
          .easing(TWEEN.Easing.Quadratic.InOut)
          .onUpdate(() =>
              camera.position.set(0, coords.y, coords.z)).start()
    }

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
      Audiovisuel: createShop({
        name: 'audiovisuel',
        src: 'medias/model/accueil/audiovisuel.gltf',
        url: 'shop.php?id=1',
        x: (1/2)*1.4,
        y: 0,
        z: (Math.sqrt(3)/2)*1.4,
        g: Math.PI/6 + Math.PI/2
      }),
      Design: createShop({
        name: 'design',
        src: 'medias/model/accueil/design.gltf',
        url: 'shop.php?id=2',
        x: (-1/2)*1.4,
        y: 0,
        z: (Math.sqrt(3)/2)*1.4,
        g: Math.PI/3
      }),
      Developpement: createShop({
        name: 'developpement',
        src: 'medias/model/accueil/developpement.gltf',
        url: 'shop.php?id=3',
        x:(-1)*1.4,
        y: 0,
        z: 0,
        g: 0
      }),
      Communication: createShop({
        name: 'communication',
        src: 'medias/model/accueil/communication.gltf',
        url: 'shop.php?id=4',
        x: (-1/2)*1.4,
        y: 0,
        z: (-Math.sqrt(3)/2)*1.4,
        g: -Math.PI/3
      }),
      MMI: createShop({
        name: 'mmi',
        src: 'medias/model/accueil/communication.gltf',
        url: 'mmi.php?',
        x: (1/2)*1.4,
        y: 0,
        z: (-Math.sqrt(3)/2)*1.4,
        g: -Math.PI/6 + Math.PI/2 + Math.PI
      }),
      Projet: createShop({
        name: 'projet',
        src: 'medias/model/accueil/communication.gltf',
        url: 'projet.php',
        x: (1)*1.4,
        y: 0,
        z: 0,
        g: Math.PI
      })
    }

    createScene('medias/model/accueil/scene1.gltf')

    const sprites = [{
      position: new THREE.Vector3(-4 + .2, 1 + 1.2, -4),
      element: document.querySelector('.audiovisuel')
    }, {
      position: new THREE.Vector3(1 + .2, 1 + 1.2, -4),
      element: document.querySelector('.design')
    }, {
      position: new THREE.Vector3(2 + .2, 1 + 1.2, 2),
      element: document.querySelector('.developpement')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.communication')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.mmi')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.projet')
    }]

    //Drone


    //Loop
  function Animate(time) {
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