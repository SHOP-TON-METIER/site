<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Les différents métiers post MMI regroupés dans un site avec une naviguation expérientielle !">
  <title>SHOP'TON METIER</title>
  <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:no-preference)">
  <link rel="icon" type="image/png" href="medias/images/drone-dark.png" media="(prefers-color-scheme:dark)">
  <link rel="icon" type="image/png" href="medias/images/drone-light.png" media="(prefers-color-scheme:light)">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <?php include 'header.php' ?>
  <canvas class="webgl"></canvas>

  <div class="loading">
    <div class="drone"></div>
    <div class="messages">
      <p class="msg1">Salut, moi c'est Droninou! Bienvenue sur SHOP'TON METIER.</p>
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


  <div class="sprite Audiovisuel">
    <a href="shop.php?id=1" class="plus">+</a>
    <div class="nom">Audiovisuel</div>
  </div>

  <div class="sprite Design">
    <a href="shop.php?id=2" class="plus">+</a>
    <div class="nom">Design</div>
  </div>

  <div class="sprite Developpement">
    <a href="shop.php?id=3" class="plus">+</a>
    <div class="nom">Développement</div>
  </div>

  <div class="sprite Communication">
    <a href="shop.php?id=4" class="plus">+</a>
    <div class="nom">Communication</div>
  </div>

  <div class="sprite MMI">
    <a href="shop.php?id=4" class="plus">+</a>
    <div class="nom">MMI</div>
  </div>

  <div class="sprite Projet">
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
    const DracoLoader = new THREE.DRACOLoader()
    DracoLoader.setDecoderPath('medias/draco')
    const GLTFloader = new THREE.GLTFLoader(loadingManager)
    GLTFloader.setDRACOLoader(DracoLoader)


    function modelLoader(src) {
      return new Promise((resolve, reject) => {
        GLTFloader.load(src, data => resolve(data), null, reject)
      })
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
      model.position.set(x, y, z)
      model.rotation.z = g
      model.scale.multiplyScalar(0.2)
      scene.add(model)
      console.log(model)

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
    const shops = {
      Audiovisuel: createShop({
        name: 'Audiovisuel',
        src: 'medias/model/shops/audiovisuel.gltf',
        url: 'shop.php?id=1',
        x: -4,
        y: 1,
        z: -4,
        g: 1
      }),
      Design: createShop({
        name: 'Design',
        src: 'medias/model/shops/design.gltf',
        url: 'shop.php?id=2',
        x: 1,
        y: 1,
        z: -4,
        g: -1
      }),
      Developpement: createShop({
        name: 'Développement',
        src: 'medias/model/shops/developpement.gltf',
        url: 'shop.php?id=3',
        x: 2,
        y: 1,
        z: 2,
        g: 0
      }),
      Communication: createShop({
        name: 'Communication',
        src: 'medias/model/shops/communication.gltf',
        url: 'shop.php?id=4',
        x: -1,
        y: 1,
        z: 1,
        g: 1
      })
    }

    const sprites = [{
      position: new THREE.Vector3(-4 + .2, 1 + 1.2, -4),
      element: document.querySelector('.Audiovisuel')
    }, {
      position: new THREE.Vector3(1 + .2, 1 + 1.2, -4),
      element: document.querySelector('.Design')
    }, {
      position: new THREE.Vector3(2 + .2, 1 + 1.2, 2),
      element: document.querySelector('.Developpement')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.Communication')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.MMI')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.Projet')
    }]

    //Interactions
    interactionManager = new THREE.InteractionManager(renderer, camera, canvas)


    //Controls
    const controls = new THREE.MapControls(camera, canvas)
    controls.enableDamping = true
    controls.enableZoom = true
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

    //Load
    window.addEventListener('load', Animate, false)
  </script>
  <!-- <script>
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
      color: 0x0007FF,
      side: THREE.DoubleSide
    })
    const decor = new THREE.Mesh(decorgeometry, decormaterial)
    decor.rotation.x = Math.PI / 2
    scene.add(decor)

    //Loaders

    // const loadingBar = document.querySelector('.progress')

    const loadingManager = new THREE.LoadingManager(
      () => {},

      (itemUrl, itemsLoaded, itemsTotal) => {
        const progressRatio = 20 * (itemsLoaded / itemsTotal)
        // loadingBar.style.width = `${progressRatio}vw`
      }
    )
    const loader = new THREE.GLTFLoader(loadingManager)

    function modelLoader(src) {
      return new Promise((resolve, reject) => {
        loader.load(src, data => resolve(data), null, reject)
      })
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

      model = gltf.scene.children[0]
      model.position.set(x, y, z)
      model.rotation.z = g
      model.scale.multiplyScalar(0.01)
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

    //Interactions
    interactionManager = new THREE.InteractionManager(renderer, camera, canvas)

    const shops = {
      Audiovisuel: createShop({
        name: 'Audiovisuel',
        src: 'gltf/characters/perso/scene.gltf',
        url: 'shop.php?id=1',
        x: -4,
        y: 1,
        z: -4,
        g: 1
      }),
      Design: createShop({
        name: 'Design',
        src: 'gltf/shops/design/scene.gltf',
        url: 'shop.php?id=2',
        x: 1,
        y: 1,
        z: -4,
        g: -1
      }),
      Developpement: createShop({
        name: 'Développement',
        src: 'gltf/shops/developpement/scene.gltf',
        url: 'shop.php?id=3',
        x: 2,
        y: 1,
        z: 2,
        g: 0
      }),
      Communication: createShop({
        name: 'Communication',
        src: 'gltf/shops/communication/scene.gltf',
        url: 'shop.php?id=4',
        x: -1,
        y: 1,
        z: 1,
        g: 1
      })
      // MMI: createShop({
      //   name: 'MMI',
      //   src: 'gltf/shops/mmi/scene.gltf',
      //   url: 'mmi.php',
      //   x: -1,
      //   y: 1,
      //   z: 1,
      //   g: 1
      // }),
      // Projet: createShop({
      //   name: 'Projet',
      //   src: 'gltf/shops/projet/scene.gltf',
      //   url: 'projet.php',
      //   x: -1,
      //   y: 1,
      //   z: 1,
      //   g: 1
      // })
    };

    const sprites = [{
      position: new THREE.Vector3(-4 + .2, 1 + 1.2, -4),
      element: document.querySelector('.Audiovisuel')
    }, {
      position: new THREE.Vector3(1 + .2, 1 + 1.2, -4),
      element: document.querySelector('.Design')
    }, {
      position: new THREE.Vector3(2 + .2, 1 + 1.2, 2),
      element: document.querySelector('.Developpement')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.Communication')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.MMI')
    }, {
      position: new THREE.Vector3(-1 + .2, 1 + 1.2, 1),
      element: document.querySelector('.Projet')
    }]

    //Controls
    const controls = new THREE.MapControls(camera, canvas)
    controls.enableDamping = true
    controls.enableZoom = true
    controls.enableRotate = false



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
  </script> -->



</body>

</html>