var camera, scene, renderer // ajouter les autres objets ???

// SCENE
function createScene() {
    scene = new THREE.Scene()

    // Sizes
    var WIDTH = window.innerWidth
    var HEIGHT = window.innerHeight

    // Camera
    camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT)
    camera.position.set(0, 0, 7)
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
        new THREE.BoxGeometry(10, 7, 0.2),
        new THREE.MeshBasicMaterial({color: 'green'})
    )
    fondVert.position.set(8, 1, -2)
    scene.add(fondVert)
    fondVert.rotation.y = Math.PI
}

function createPhotograph(){
    // le mannequin
    const mannequin = new THREE.Mesh(
        new THREE.BoxGeometry(1.5, 3.5, 0.1),
        new THREE.MeshBasicMaterial({color: 'yellow'})
    )
    mannequin.position.set(7, -1.5, -1)
    scene.add(mannequin)

    // le photographe
    const photographe  = new THREE.Mesh(
        new THREE.BoxGeometry(1.5, 2.5, 0.5),
        new THREE.MeshBasicMaterial({color: 'red'})
    )
    photographe.position.set(7, -2, 1.5)
    scene.add(photographe)

}

function createControls() {
    // const controls = new THREE.OrbitControls(camera, renderer.domElement)
    controls = new THREE.MapControls(camera, renderer.domElement)
    controls.enableDamping = true
    controls.enableZoom = false
    controls.enableRotate = false
}

function loop() {
    controls.update()
    renderer.render(scene, camera)
    requestAnimationFrame(loop)
}

function init() {
    createScene()
    createGreenScreen()
    createPhotograph()
    createControls()
    loop()
}

window.addEventListener('load', init, false)