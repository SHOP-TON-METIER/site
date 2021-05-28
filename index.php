<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Les différents métiers post MMI regroupés dans un site avec une naviguation expérientielle !">
  <title>SHOP'TON MÉTIER</title>
  <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:no-preference)">
  <link rel="icon" type="image/png" href="medias/images/drone-dark.png" media="(prefers-color-scheme:dark)">
  <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:light)">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php include 'header.php'; ?>
  <canvas class="webgl"></canvas>

  <!-- <div class="loading">
    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z" fill="#09192C" />
    </svg>
    <div class="drone"></div>
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
  </div> -->


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
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>

  <script>
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
    }, '+=2000').add({
      targets: '.msg2',
      scale: '1.2',
      translateY: '-40vh'
    }, '-=2000').add({
      targets: '.msg2',
      scale: '1',
      translateY: '-100vh'
    }, '+=2000').add({
      targets: '.msg3',
      scale: '1.2',
      translateY: '-40vh'
    }, '-=2000').add({
      targets: '.msg3',
      scale: '1',
      translateY: '-100vh'
    }, '+=2000').add({
      targets: '.msg4',
      scale: '1.2',
      translateY: '-40vh'
    }, '-=2000').add({
      targets: '.msg4',
      scale: '1',
      translateY: '-100vh'
    }, '+=3000').add({
      targets: '.msg5',
      scale: '1.2',
      translateY: '-40vh'
    }, '-=2000').add({
      targets: '.msg5',
      scale: '1',
      translateY: '-100vh'
    }, '+=3000').add({
      targets: '.msg6',
      scale: '1.2',
      translateY: '-40vh'
    }, '-=2000').add({
      targets: '.loading',
      opacity: '0'
    }).add({
      targets: 'header',
      opacity: '1',
      begin: function() {
        document.querySelector('header').style.display = 'flex';
      }
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
    camera.position.y = 3.6
    camera.position.z = 1.6
    camera.rotation.x = 0,10472

    hemisphereLight = new THREE.HemisphereLight(0xaaaaaa, 0x000000, .9)
    shadowLight = new THREE.DirectionalLight(0xffffff, .9)
    shadowLight.position.set(150, 350, 350)
    shadowLight.castShadow = true
    shadowLight.shadow.camera.left = -400
    shadowLight.shadow.camera.right = 400
    shadowLight.shadow.camera.top = 400
    shadowLight.shadow.camera.bottom = -400
    shadowLight.shadow.camera.near = 1
    shadowLight.shadow.camera.far = 1000
    shadowLight.shadow.mapSize.width = 2048
    shadowLight.shadow.mapSize.height = 2048

    scene.add(hemisphereLight)
    scene.add(shadowLight)

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true
    })
    renderer.setSize(WIDTH, HEIGHT)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    renderer.setClearColor(0xE2F2FD)
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

    // const loadingScreen = document.querySelector('.loading')
    // const loadingBar = document.querySelector('.progress')
    // const header = document.querySelector('.right')


    const loadingManager = new THREE.LoadingManager(
      () => {
        gsap.delayedCall(1, () => {
          // loadingScreen.style.opacity = 0
          // header.style.visibility = "visible"
        })
      },

      (itemUrl, itemsLoaded, itemsTotal) => {
        const progressRatio = 20 * (itemsLoaded / itemsTotal)
        // loadingBar.style.width = `${progressRatio}vw`
      }
    )
    const dracoLoader = new THREE.DRACOLoader(loadingManager);
    dracoLoader.setDecoderPath('medias/draco/');

    const loader = new THREE.GLTFLoader(loadingManager);
    loader.setDRACOLoader(dracoLoader);


    function modelLoader(src) {
      return new Promise((resolve, reject) => {
        loader.load(src, data => resolve(data), null, reject)
      })
    }

    async function createScene(src) {
            const gltf = await modelLoader(src);

            scenemodel = gltf.scene
            scenemodel.receiveShadow = true
            scenemodel.scale.multiplyScalar(0.2)
            scenemodel.rotation.y = -Math.PI/2
            scenemodel.castShadow = true

            planet.add(scenemodel);
        }

    async function createShop({name, src, url, x, y, z, g}) {
      const gltf = await modelLoader(src)

      model = gltf.scene
      model.position.set(x, y, z)
      model.rotation.z = g
      model.scale.multiplyScalar(0.2)
      planet.add(model)

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

    planet = new THREE.Group()
    scene.add(planet)


    createScene('medias/model/shop/planet.gltf')

    // Data
    const shops = {
      Audiovisuel: createShop({
        name: 'audiovisuel',
        src: 'medias/model/shop/audiovisuel.gltf',
        url: 'shop.php?id=1',
        x: -4,
        y: 1,
        z: -4,
        g: 1
      }),
      Design: createShop({
        name: 'design',
        src: 'medias/model/shop/audiovisuel.gltf',
        url: 'shop.php?id=2',
        x: 1,
        y: 1,
        z: -4,
        g: -1
      }),
      Developpement: createShop({
        name: 'developpement',
        src: 'medias/model/shop/developpement.gltf',
        url: 'shop.php?id=3',
        x: 2,
        y: 1,
        z: 2,
        g: 0
      }),
      Communication: createShop({
        name: 'communication',
        src: 'medias/model/shop/communication.gltf',
        url: 'shop.php?id=4',
        x: -1,
        y: 1,
        z: 1,
        g: 1
      })
    }

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

    //Interactions
    interactionManager = new THREE.InteractionManager(renderer, camera, canvas)

    //LERP
    function lerp(a, b, t) {
      return ((1 - t) * a + t * b)
    }


    //SCROLL

    let smoothscrool = 0

    const scrollPos = {
      y: 0,
      deltaY: 0
    }

    function onMouseWheel(event) {
      event.stopImmediatePropagation()
      event.stopPropagation()
      event.preventDefault()

      scrollPos.deltaY = event.wheelDeltaY || scrollPos.deltaY * -1
      scrollPos.deltaY *= -0.5

      scroll(event)

    }

    function scroll(event) {

      if ((scrollPos.y + scrollPos.deltaY) < -(HEIGHT / 15)) {
        scrollPos.y = -(HEIGHT / 15)
      } else if ((scrollPos.y + scrollPos.deltaY) > HEIGHT * 0.8) {
        scrollPos.y = HEIGHT * 0.8
      } else {
        scrollPos.y = (scrollPos.y + (scrollPos.deltaY))
      }

    }




    //Loop
    function Animate(time) {
      window.addEventListener("wheel", onMouseWheel, {
        passive: false
      })

      smoothscrool = lerp(smoothscrool, scrollPos.y, .025)
      planet.rotation.x = (smoothscrool / HEIGHT)
      // planet.rotation.x = (smoothscrool / HEIGHT)

      // controls.update()
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