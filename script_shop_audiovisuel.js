var camera, scene, renderer // ajouter les autres objets ???

// SCENE
function createScene() {
    scene = new THREE.Scene()

    // Sizes
    var WIDTH = window.innerWidth
    var HEIGHT = window.innerHeight

    // Camera
    camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT)
    camera.position.set(0,0,)
    scene.add(camera)

    // Renderer
    const canvas = document.querySelector('canvas')
    renderer = new THREE.WebGLRenderer({
       canvas: canvas,
    //    alpha: true
    })

    renderer.setSize(WIDTH, HEIGHT)
    renderer.setClearColor(0xffffff)
    // canvas.appendChild(renderer.domElement)
    }
    

// CREATE OBJECT
function createGreenScreen(){
    const fondVert = new THREE.Mesh(
        new THREE.BoxGeometry(2.5, 1.5, 0.1),
        new THREE.MeshBasicMaterial({color: 'green'})
    )
    fondVert.position.z = -3
    scene.add(fondVert)
}

function createControls() {
    const controls = new THREE.OrbitControls(camera, renderer.domElement)
}

function loop() {
    controls.update()
    renderer.render(scene, camera)
    requestAnimationFrame(loop)
}

function init() {
    createScene()
    createGreenScreen()
    createControls()
    loop()
}

window.addEventListener('load', init, false)