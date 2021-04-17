<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php include 'styles_header.php'?>
  </head>

  <body>
    <?php include 'header.php' ?>

    <canvas> </canvas>

    <script src="js/three.min.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script src="js/three.interactive.js"></script>
    <script>
      var camera, scene, renderer;

      // SCENE
      function createScene() {
        scene = new THREE.Scene();

        // Sizes
        var WIDTH = window.innerWidth;
        var HEIGHT = window.innerHeight;

        // Camera
        camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT);
        camera.position.set(0, 0, 15);
        scene.add(camera);

        // Renderer
        const canvas = document.querySelector("canvas");
        renderer = new THREE.WebGLRenderer({
          canvas: canvas,
          //    alpha: true
        });

        renderer.setSize(WIDTH, HEIGHT);
        renderer.setClearColor(0xffffff);
        // canvas.appendChild(renderer.domElement)
      }

      // CREATE OBJECT
      // fond vert
      function createGreenScreen() {
        const fondVert = new THREE.Mesh(
          new THREE.BoxGeometry(20, 14, 0.2),
          new THREE.MeshBasicMaterial({
            color: "green",
          })
        );
        fondVert.position.set(18, -1, -3);
        scene.add(fondVert);
        // fondVert.rotation.y = Math.PI
      }

      function createObjects() {
        // le mannequin
        const mannequin = new THREE.Mesh(
          new THREE.BoxGeometry(2.5, 6, 0.1),
          new THREE.MeshBasicMaterial({
            color: "yellow",
          })
        );
        mannequin.position.set(15, -5, -1);
        scene.add(mannequin);

        // le photographe
        const photographe = new THREE.Mesh(
          new THREE.BoxGeometry(3, 5, 0.5),
          new THREE.MeshBasicMaterial({
            color: "red",
          })
        );
        photographe.position.set(17, -5, 2.5);
        scene.add(photographe);

        // le vidéaste
        const videaste = new THREE.Mesh(
          new THREE.BoxGeometry(3, 5, 0.5),
          new THREE.MeshBasicMaterial({
            color: "purple",
          })
        );
        videaste.position.set(4, -5, 2);
        scene.add(videaste);

        // le cadreur-monteur
        const monteur = new THREE.Mesh(
          new THREE.BoxGeometry(7, 5, 2),
          new THREE.MeshBasicMaterial({
            color: "red",
          })
        );
        monteur.position.set(-16, -5, 2.5);
        scene.add(monteur);

        // l'ingé son
        const ingeSon = new THREE.Mesh(
          new THREE.BoxGeometry(10, 4, 4),
          new THREE.MeshBasicMaterial({
            color: "red",
          })
        );
        ingeSon.position.set(-8, -5, -8);
        scene.add(ingeSon);
      }

      function createControls() {
        // const controls = new THREE.OrbitControls(camera, renderer.domElement)
        controls = new THREE.MapControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.enableZoom = false;
        controls.enableRotate = false;
      }

      function loop() {
        controls.update();
        renderer.render(scene, camera);
        requestAnimationFrame(loop);
        // interactionManager.update()
      }

      function init() {
        createScene();
        createGreenScreen();
        createObjects();
        createControls();
        // createInteractions()
        loop();
        // console.log(photographe);
      }

      // function createInteractions() {
      //     interactionManager = new THREE.InteractionManager(renderer, camera, renderer.domElement)
      //     interactionManager.add(photographe)
      //     interactionManager.add(videaste)

      //     //COMMUNICATION
      //     photographe.addEventListener("click", (event) => {
      //         console.log('bonjour')
      //     })
      // }

      window.addEventListener("load", init, false);
    </script>
  </body>
</html>
