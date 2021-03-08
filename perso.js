//CREATE SCENE

function createScene() {
    WIDTH = 200
    HEIGHT = 300

    const scene = new THREE.Scene()
    const camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT, 0.1, 1000)

    const avatar = document.querySelector(".avatar")

    const renderer = new THREE.WebGLRenderer()
    renderer.setSize(WIDTH, HEIGHT)
    avatar.appendChild(renderer.domElement)



}


//CONTROLS

function createControls() {
    controls = new THREE.OrbitControls(camera, renderer.domElement)
}

function loop(){
    controls.update()

    renderer.render(scene, camera);


    requestAnimationFrame(loop)
}
    
function init(){
    createScene()
    createControls()
    loop()
}

window.addEventListener('load', init, false);