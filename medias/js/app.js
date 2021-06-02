
$(function () {
  if (!window.matchMedia) {}
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

  // $("header .results").hide()

  searchposition = $(".searchbar").offset()
  $("header .results").css("width", searchposition + "px")

  $(window).on('resize', function () {
    searchposition = $(".searchbar").offset()
    $("header .results").css("width", searchposition + "px")
  });

  $(".searchtext").keyup(function () {
    $("header .found").html("")
    
    var query = $(this).val()
    if (query == "") {
      $("header .found").html("")
    } else {    

      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
            search : query,
            category : 'metier'
        }
    })
    request.done(function(data) {
      donnees = JSON.parse(data);        
      $('header .found').append('<div class="searchmetier"><h2></h2><div class="content"></div></div>')
      i = 0
      $.each(donnees, function(index, value){
        $("header .found .searchmetier .content").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
        value.nom + '</a>').show()
        i++
      })
      if (i >! 1) {
        $("header .found .searchmetier h2").html('Métiers trouvés')
      }
      if (i == 1) {
        $("header .found .searchmetier h2").html('Métier trouvé')
      }
    }, domaine)

    }

    function domaine() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'domaine'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data);
        $('header .found').append('<div class="searchdomaine"><h2></h2><div class="content"></div></div>')
        i = 0
        $.each(donnees, function(index, value){
          $("header .found .searchdomaine .content").append('<a href="shop.php?id='+ value.id + '" class = ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.nom + '</a>').show()
          i++
        })
        if (i >! 1) {
          $("header .found .searchdomaine h2").html('Domaines trouvés')
        }
        if (i == 1) {
          $("header .found .searchdomaine h2").html('Domaine trouvé')
        }
      }, etudiantnom)
    
    }
    
    function etudiantnom() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiantnom'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data)
        $('header .found').append('<div class="searchetudiant"><h2></h2><div class="content"></div></div>')
        i=0
        $.each(donnees, function(index, value){
          $("header .found .searchetudiant .content").append('<a href="metier.php?id='+ value.id + '#'+ value.nom +'" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.prenom +' '+value.nom+'</a>').show()
          i++
        })
        if (i>! 1) {
          $("header .found .searchetudiant h2").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("header .found .searchetudiant h2").html('Étudiant trouvé')
        }
      }, etudiantprenom)

    }

    function etudiantprenom() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiantprenom'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data)
        i=$('main .searchetudiant .content').children().length
        $.each(donnees, function(index, value){
          $("header .found .searchetudiant .content").append('<a href="metier.php?id='+ value.id + '#'+ value.nom +'" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.prenom +' '+value.nom+'</a>').show()
          i++
        })
        if (i>! 1) {
          $("header .found .searchetudiant h2").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("header .found .searchetudiant h2").html('Étudiant trouvé')
        }
      }, check)

    }

      function check() {
        $('header .notfound').html("")
        if ($('header .content').children().length == 0) {
              $('header .notfound').html("<h2 class='aucunresultat'>Nous n'avons rien trouvé 😥</h2>")
        }
      } 
    })
   
  })
