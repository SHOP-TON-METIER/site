<!DOCTYPE html>
<html lang="fr" header.html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMI</title>
  <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:no-preference)">
  <link rel="icon" type="image/png" href="images/drone-dark.png" media="(prefers-color-scheme:dark)">
  <link rel="icon" type="image/png" href="images/drone-light.png" media="(prefers-color-scheme:light)">
  <link rel="stylesheet" href="mmi.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <?php include 'header.php' ?>

  <main>

    <h1>Métiers du Multimédia et de l'Internet</h1>

    <section>

      <h2>MMI c'est quoi ?</h2>

      <div class="mmi">

        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing lectus penatibus
          sollicitudin velit aliquam duis vitae lacus sit. Tincidunt sed vestibulum erat non turpis rhoncus tincidunt.
          Mauris suspendisse sapien eu, at in at convallis. Ultrices hac consequat eros, ut purus, eget sed nisi,
          nascetur. Tempus habitant fringilla consequat tempor eu lacus blandit curabitur. Cras hac urna, sed massa
          ut. Velit pellentesque elementum eleifend orci dictum molestie. In fermentum lacus ultricies nibh elit nunc
          ipsum semper. Fames venenatis adipiscing duis dolor lacus, lobortis vestibulum, vitae.
          Quis arcu volutpat convallis commodo sit vitae. Elit non ullamcorper aliquam leo. Hendrerit non aliquet
          ultricies magna nisi, faucibus ut egestas. Id porttitor dui, nisi posuere. 
        </p>

        <div class="illustration"></div>

      </div>

    </section>

    <section>
      <h2 class="title-right">Quelles sont les matières enseignées ?</h2>

      <div class="swiper-container">

        <div class="swiper-wrapper">

          <p>Culture Scientifique</p>
          <p>Communication & Marketing</p>
          <p>Culture Artistique</p>
          <p>Informatique</p>

        </div>

      </div>

      <div class="cards-container">

        <div class="card">

          <div class="card-front" src="images/croix.png">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

          </div>

          <div class="card-back">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde
              assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum
              veniam.
            </p>
            
          </div>

        </div>

        <div class="card">

          <div class="card-front" src="images/croix.png">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

          </div>

          <div class="card-back">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde
              assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum
              veniam.
            </p>
            
          </div>

        </div>

        <div class="card">

          <div class="card-front" src="images/croix.png">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

          </div>

          <div class="card-back">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde
              assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum
              veniam.
            </p>
            
          </div>

        </div>

        <div class="card">

          <div class="card-front" src="images/croix.png">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

          </div>

          <div class="card-back">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde
              assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum
              veniam.
            </p>
            
          </div>

        </div>

        <div class="card">

          <div class="card-front" src="images/croix.png">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

          </div>

          <div class="card-back">

            <img src="images/logo-card.svg" alt="">
            <h3>Réseau</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde
              assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum
              veniam.
            </p>
            
          </div>

        </div>
      
      </div>

    </section>


    <section>
      <h2>Quelques statistiques ?</h2>

      <canvas id="bacmmi" class="pie"></canvas>

      <p> La formation est accessible à toutes les filières du baccalauréat mais concerne plus particulièrement les
        filières scientifiques, technologiques (STI2D, STG, STT) et économiques et sociales. L’inscription est possible
        uniquement via la plateforme Parcoursup. Les admissions se font sur étude de dossier.
      </p>
        
      <canvas id="genre" class="pie"></canvas>
        
      <p>La formation est accessible à toutes les filières du baccalauréat mais concerne plus particulièrement les
        filières
        scientifiques, technologiques (STI2D, STG, STT) et économiques et sociales. L’inscription est possible uniquement
        via la plateforme Parcoursup. Les admissions se font sur étude de dossier.
      </p>

      </section>
  
  </main>

  <?php include 'footer.php' ?>


  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>

    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 10,
    });

  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>

    $(document).ready(function () {
      if (!window.matchMedia)
        return

      var current = $('head > link[rel="icon"][media]');
      $.each(current, function (i, icon) {
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

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>

    const bacdata = {
      labels: [
        'Bac S',
        'Bac Techno',
        'Bac ES',
        'Bac L',
        'Bac Pro-Autres'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [48, 33, 15, 2, 2],
        backgroundColor: [
          '#E8442F',
          '#FFA236',
          '#2DC6F6',
          '#5E46F8',
          '#3A4756'
        ],
        hoverOffset: 4
      }]
    };

    const bacconfig = {
      type: 'pie',
      data: bacdata,
    };

    var bacmmi = new Chart(
      document.getElementById('bacmmi'),
      bacconfig
    );

    const genredata = {
      labels: [
        'Femmes',
        'Hommes',

      ],
      datasets: [{
        label: 'My First Dataset',
        data: [35, 65],
        backgroundColor: [
          '#E8442F',
          '#FFA236'
        ],
        hoverOffset: 4
      }]
    };

    const genreconfig = {
      type: 'pie',
      data: genredata,
    };

    var genre = new Chart(
      document.getElementById('genre'),
      genreconfig
    );

  </script>

</body>

</html>