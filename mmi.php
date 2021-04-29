<!DOCTYPE html>
<html lang="fr" header.html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMI</title>
  <link rel="stylesheet" href="mmi.css">
</head>

<body>
  <header>
    <div class="search"><a href=""><span class="iconify" data-icon="eva:search-fill" data-inline="false"></span></a>
    </div>
    <div class="bag"><a href=""><span class="iconify" data-icon="akar-icons:shopping-bag" data-inline="false"></a>
    </div>
  </header>
  <a href="" class="fleche">&lt;</a>
  <p class="back">retour</p>


  <!DOCTYPE html>
<html lang="fr" header.html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="styleMMI.css">
</head>
<body>
        <h1>Métier du Multimédia et de l'Internet</h1>
    <div>

        <h1 class="titre1">MMI c'est quoi ?</h1>
        <p class="mmi"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing lectus penatibus
            sollicitudin velit aliquam duis vitae lacus sit. Tincidunt sed vestibulum erat non turpis rhoncus tincidunt.
            Mauris suspendisse sapien eu, at in at convallis. Ultrices hac consequat eros, ut purus, eget sed nisi,
            nascetur. Tempus habitant fringilla consequat tempor eu lacus blandit curabitur. Cras hac urna, sed massa
            ut. Velit pellentesque elementum eleifend orci dictum molestie. In fermentum lacus ultricies nibh elit nunc
            ipsum semper. Fames venenatis adipiscing duis dolor lacus, lobortis vestibulum, vitae.
            Quis arcu volutpat convallis commodo sit vitae. Elit non ullamcorper aliquam leo. Hendrerit non aliquet
            ultricies magna nisi, faucibus ut egestas. Id porttitor dui, nisi posuere. Ultricies eget phasellus faucibus
            risus neque risus libero. Turpis non turpis et diam curabitur id. In nisi purus est id congue urna dolor
            tortor amet. Metus tincidunt ac nunc, neque augue in tortor orci id. Curabitur eu ipsum elit laoreet in
            parturient interdum non magna.
            Dolor gravida non egestas amet at volutpat mauris. Malesuada nullam nibh praesent felis, mattis. Sed mattis
            nisl sagittis tellus. Quis placerat adipiscing egestas viverra in commodo scelerisque morbi faucibus. Massa,
            tempus mattis sit vel aliquet facilisis a ipsum. Elit, gravida hendrerit nunc, commodo volutpat quis nullam
            cum. Feugiat turpis habitant neque gravida volutpat fermentum sit.</p>
    </div>
    <div id="carre"></div>
    <div>
    <h1 class="titre2">Les matières enseignées</h1>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
         <p>Culture Scientifique</p> <br>
         <p>Communication & Marketing</p>
         <p>Culture Artistique</p>
         <p>Informatique</p>


      </div>
     <div class="swiper-pagination"></div>
     </div>   
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 10,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
        });
    </script>
    <div class="maincontainer">

        <div class="thecard">
  
          <div class="thefront" src="images/croix.png"><h1>Réseau</h1></div>
  
          <div class="theback"><h1>Réseau</h1><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquam sunt eligendi laudantium hic cum unde assumenda, porro dolorem magnam voluptates doloremque culpa repellat molestiae minima illum qui rerum veniam.</p>
          
  
        </div>
      </div>
      <div>
        <h1 class="titre1">Quelques statistiques</h1>
        <canvas id="bacmmi"class="pie"></canvas>
      </div>
      <p> La formation est accessible à toutes les filières du baccalauréat mais concerne plus particulièrement les filières scientifiques, technologiques (STI2D, STG, STT) et  économiques et sociales. L’inscription est possible uniquement via la plateforme Parcoursup. Les admissions se font sur étude de dossier.
      </p>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const data = {
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
        const config = {
      type: 'pie',
      data: data,
    };
          var bacmmi = new Chart(
          document.getElementById('bacmmi'),
          config
        );
      </script>
      <canvas id="genre" class="pie"></canvas>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const data = {
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
        const config = {
      type: 'pie',
      data: data,
    };
          var genre = new Chart(
          document.getElementById('genre'),
          config
        );
      </script>
      


</body>
</html>
   

   




</body>

</html>