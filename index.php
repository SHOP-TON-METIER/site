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
          <svg width="850" height="500" viewBox="0 0 850 500" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="850" height="500">
            <rect width="850" height="500" fill="white"/>
            </mask>
            <g mask="url(#mask0)">
            <path d="M178.962 303.062C186.593 295.293 198.967 295.293 206.599 303.062C214.231 310.831 214.231 323.427 206.599 331.196L130.596 408.564C122.964 416.333 110.59 416.333 102.958 408.564C95.3264 400.795 95.3264 388.199 102.958 380.43L178.962 303.062Z" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 0.713373 -0.700784 0.713373 161.795 446.719)" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 0.713373 -0.700784 0.713373 67.0771 350.3)" fill="#09192C"/>
            <ellipse rx="9.85951" ry="9.85952" transform="matrix(0.700784 0.713373 -0.700784 0.713373 116.777 394.497)" fill="#FA5014"/>
            <path d="M178.325 197.559C185.957 205.328 198.331 205.328 205.963 197.559C213.595 189.79 213.595 177.194 205.963 169.425L129.96 92.0564C122.328 84.2874 109.954 84.2874 102.322 92.0564C94.6901 99.8254 94.6901 112.421 102.322 120.19L178.325 197.559Z" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 -0.713373 -0.700784 -0.713373 161.159 53.9019)" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 -0.713373 -0.700784 -0.713373 66.4408 150.321)" fill="#09192C"/>
            <ellipse rx="9.85951" ry="9.85952" transform="matrix(0.700784 -0.713373 -0.700784 -0.713373 116.141 106.123)" fill="#FA5014"/>
            <path d="M294.012 331.196C286.38 323.427 286.38 310.831 294.012 303.062C301.644 295.293 314.018 295.293 321.649 303.062L397.653 380.43C405.285 388.199 405.285 400.795 397.653 408.564C390.021 416.333 377.647 416.333 370.015 408.564L294.012 331.196Z" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 -0.713373 0.700784 0.713373 435.134 348.671)" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 -0.713373 0.700784 0.713373 340.417 445.09)" fill="#09192C"/>
            <ellipse rx="9.85952" ry="9.85951" transform="matrix(0.700784 -0.713373 0.700784 0.713373 383.834 394.497)" fill="#FA5014"/>
            <path d="M294.038 168.804C286.406 176.573 286.406 189.169 294.038 196.938C301.669 204.707 314.043 204.707 321.675 196.938L397.678 119.57C405.31 111.801 405.31 99.2046 397.678 91.4356C390.046 83.6666 377.673 83.6666 370.041 91.4356L294.038 168.804Z" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 0.713373 0.700784 -0.713373 435.159 151.329)" fill="#09192C"/>
            <ellipse rx="42.55" ry="12.5147" transform="matrix(0.700784 0.713373 0.700784 -0.713373 340.442 54.9104)" fill="#09192C"/>
            <ellipse rx="9.85951" ry="9.85951" transform="matrix(0.700784 0.713373 0.700784 -0.713373 383.859 105.503)" fill="#FA5014"/>
            <path d="M162.5 200.088C162.5 158.618 196.118 125 237.588 125H250H262.412C303.882 125 337.5 158.618 337.5 200.088V299.912C337.5 341.382 303.882 375 262.412 375H237.588C196.118 375 162.5 341.382 162.5 299.912V200.088Z" fill="#FA5014"/>
            <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="197" y="220" width="36" height="30">
            <rect x="197.5" y="220" width="35" height="30" fill="#C4C4C4"/>
            </mask>
            <g mask="url(#mask1)">
            <ellipse cx="215" cy="237.5" rx="17.5" ry="17.5" fill="white"/>
            </g>
            <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="267" y="220" width="36" height="30">
            <rect x="267.5" y="220" width="35" height="30" fill="#C4C4C4"/>
            </mask>
            <g mask="url(#mask2)">
            <ellipse cx="285" cy="237.5" rx="17.5" ry="17.5" fill="white"/>
            </g>
            <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="215" y="280" width="71" height="36">
            <rect x="215.253" y="280.329" width="70.0824" height="35.0412" fill="#C4C4C4"/>
            </mask>
            <g mask="url(#mask3)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M284.204 280.057C293.332 276.243 299 270.915 299 265.02C299 253.422 277.061 244.02 250 244.02C222.938 244.02 201 253.422 201 265.02C201 270.915 206.667 276.243 215.795 280.057C215.274 281.979 215 283.974 215 286.02C215 301.484 230.67 314.02 250 314.02C269.33 314.02 285 301.484 285 286.02C285 283.974 284.725 281.978 284.204 280.057ZM284.204 280.057C280.788 267.458 266.772 258.02 250 258.02C233.228 258.02 219.211 267.458 215.795 280.057C224.625 283.747 236.693 286.02 250 286.02C263.306 286.02 275.374 283.747 284.204 280.057Z" fill="white"/>
            </g>
            <path d="M526.56 273.33V281.56H515.387V315.5H505.115V281.56H493.942V273.33H526.56ZM551.659 315.92C547.694 315.92 544.05 314.999 540.726 313.157C537.442 311.315 534.819 308.752 532.857 305.468C530.934 302.144 529.973 298.42 529.973 294.295C529.973 290.17 530.934 286.466 532.857 283.182C534.819 279.898 537.442 277.335 540.726 275.493C544.05 273.651 547.694 272.73 551.659 272.73C555.623 272.73 559.248 273.651 562.532 275.493C565.855 277.335 568.458 279.898 570.341 283.182C572.263 286.466 573.224 290.17 573.224 294.295C573.224 298.42 572.263 302.144 570.341 305.468C568.418 308.752 565.815 311.315 562.532 313.157C559.248 314.999 555.623 315.92 551.659 315.92ZM551.659 306.549C555.023 306.549 557.706 305.428 559.708 303.186C561.751 300.943 562.772 297.979 562.772 294.295C562.772 290.571 561.751 287.607 559.708 285.405C557.706 283.162 555.023 282.041 551.659 282.041C548.255 282.041 545.532 283.142 543.489 285.345C541.487 287.547 540.486 290.531 540.486 294.295C540.486 298.019 541.487 301.003 543.489 303.246C545.532 305.448 548.255 306.549 551.659 306.549ZM616.663 315.5H606.391L589.211 289.489V315.5H578.939V273.33H589.211L606.391 299.461V273.33H616.663V315.5ZM684.595 273.33V315.5H674.323V290.21L664.892 315.5H656.602L647.111 290.15V315.5H636.839V273.33H648.973L660.807 302.525L672.521 273.33H684.595ZM702.254 281.56V290.09H716.01V298.019H702.254V307.27H717.812V315.5H691.982V273.33H717.812V281.56H702.254ZM711.625 264.86L697.148 270.928V263.839L711.625 256.871V264.86ZM754.817 273.33V281.56H743.643V315.5H733.371V281.56H722.198V273.33H754.817ZM770.244 273.33V315.5H759.972V273.33H770.244ZM787.96 281.56V290.09H801.716V298.019H787.96V307.27H803.518V315.5H777.688V273.33H803.518V281.56H787.96ZM831.692 315.5L822.922 299.581H820.459V315.5H810.187V273.33H827.427C830.751 273.33 833.575 273.911 835.897 275.072C838.26 276.234 840.022 277.836 841.183 279.878C842.345 281.88 842.926 284.123 842.926 286.606C842.926 289.409 842.125 291.912 840.523 294.115C838.961 296.317 836.638 297.879 833.555 298.8L843.286 315.5H831.692ZM820.459 292.313H826.827C828.709 292.313 830.11 291.852 831.032 290.931C831.993 290.01 832.473 288.709 832.473 287.027C832.473 285.425 831.993 284.163 831.032 283.242C830.11 282.321 828.709 281.86 826.827 281.86H820.459V292.313Z" fill="#09192C"/>
            <path d="M520.973 251.631C516.348 251.631 512.203 250.88 508.539 249.378C504.875 247.876 501.931 245.654 499.708 242.71C497.546 239.767 496.405 236.223 496.284 232.078H512.684C512.924 234.421 513.735 236.223 515.117 237.484C516.498 238.686 518.3 239.286 520.523 239.286C522.806 239.286 524.608 238.776 525.929 237.754C527.251 236.673 527.912 235.201 527.912 233.339C527.912 231.777 527.371 230.486 526.29 229.465C525.269 228.443 523.977 227.603 522.415 226.942C520.913 226.281 518.751 225.53 515.928 224.689C511.843 223.428 508.509 222.166 505.926 220.905C503.343 219.643 501.12 217.781 499.258 215.318C497.396 212.855 496.465 209.641 496.465 205.677C496.465 199.79 498.597 195.194 502.862 191.891C507.127 188.527 512.684 186.845 519.532 186.845C526.5 186.845 532.117 188.527 536.382 191.891C540.647 195.194 542.929 199.82 543.23 205.767H526.56C526.44 203.724 525.689 202.133 524.307 200.991C522.926 199.79 521.154 199.189 518.991 199.189C517.129 199.189 515.627 199.7 514.486 200.721C513.344 201.682 512.774 203.094 512.774 204.956C512.774 206.998 513.735 208.59 515.657 209.732C517.579 210.873 520.583 212.104 524.668 213.426C528.753 214.807 532.056 216.129 534.579 217.391C537.162 218.652 539.385 220.484 541.247 222.887C543.109 225.29 544.041 228.383 544.041 232.168C544.041 235.772 543.109 239.046 541.247 241.989C539.445 244.933 536.802 247.276 533.318 249.018C529.834 250.76 525.719 251.631 520.973 251.631ZM608.307 187.746V251H592.899V224.959H568.931V251H553.523V187.746H568.931V212.525H592.899V187.746H608.307ZM649.345 251.631C643.398 251.631 637.932 250.249 632.946 247.486C628.02 244.723 624.086 240.878 621.142 235.952C618.259 230.966 616.817 225.38 616.817 219.193C616.817 213.005 618.259 207.449 621.142 202.523C624.086 197.597 628.02 193.753 632.946 190.989C637.932 188.226 643.398 186.845 649.345 186.845C655.292 186.845 660.729 188.226 665.655 190.989C670.641 193.753 674.545 197.597 677.368 202.523C680.252 207.449 681.693 213.005 681.693 219.193C681.693 225.38 680.252 230.966 677.368 235.952C674.485 240.878 670.58 244.723 665.655 247.486C660.729 250.249 655.292 251.631 649.345 251.631ZM649.345 237.574C654.391 237.574 658.416 235.892 661.42 232.528C664.483 229.164 666.015 224.719 666.015 219.193C666.015 213.606 664.483 209.161 661.42 205.857C658.416 202.493 654.391 200.811 649.345 200.811C644.239 200.811 640.155 202.463 637.091 205.767C634.088 209.071 632.586 213.546 632.586 219.193C632.586 224.779 634.088 229.254 637.091 232.618C640.155 235.922 644.239 237.574 649.345 237.574ZM738.472 208.11C738.472 211.774 737.631 215.138 735.949 218.201C734.267 221.205 731.684 223.638 728.2 225.5C724.716 227.362 720.391 228.293 715.225 228.293H705.674V251H690.266V187.746H715.225C720.271 187.746 724.536 188.617 728.02 190.359C731.504 192.101 734.117 194.504 735.859 197.567C737.601 200.631 738.472 204.145 738.472 208.11ZM714.053 216.039C716.997 216.039 719.19 215.348 720.631 213.966C722.073 212.585 722.794 210.633 722.794 208.11C722.794 205.587 722.073 203.634 720.631 202.253C719.19 200.871 716.997 200.18 714.053 200.18H705.674V216.039H714.053ZM750.008 187.746L765.776 187.746L755.684 211.894H745.322L750.008 187.746Z" fill="#FA5014"/>
            </g>
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


    <!-- <div class="sprite audiovisuel">
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
    </div> -->

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