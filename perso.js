var camera, scene, renderer, avatar

//CREATE SCENE

function createScene() {
    WIDTH = 200
    HEIGHT = document.querySelector(".avatar").clientHeight

    scene = new THREE.Scene()
    camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT, 0.1, 1000)

    avatar = document.querySelector(".avatar")

    renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });

    renderer.setSize(WIDTH, HEIGHT)
    renderer.setClearColor( 0x000000);
    avatar.appendChild(renderer.domElement)

    window.addEventListener('resize', handleWindowResize, false);

}

//RESIZE

function handleWindowResize() {
    HEIGHT = document.querySelector(".avatar").clientHeight
    renderer.setSize(WIDTH, HEIGHT)
    camera.aspect = WIDTH / HEIGHT
    camera.updateProjectionMatrix()
}


//CREATE OBJECT

function createObject(){
    const loader = new GLTFLoader();

    loader.load(
        'gltf/characters/perso/scene.gltf',

        function ( gltf ) {
            console.log(gltf)
        }


    )
}


//CONTROLS

function createControls() {
    controls = new THREE.OrbitControls(camera, renderer.domElement)
}

function loop(time){
    // controls.update()

    renderer.render(scene, camera)


    requestAnimationFrame(loop)
}
    
function init(){
    createScene()
    // createControls()
    loop()
}

window.addEventListener('load', init, false);