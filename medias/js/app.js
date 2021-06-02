
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
      $('header .found').append('<p class="searchmetier"></p>')
      i = 0
      $.each(donnees, function(index, value){
        $("header .found").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
        value.nom + '</a>').show()
        i++
      })
      if (i >! 1) {
        $("header .found .searchmetier").html('Métiers trouvés')
      }
      if (i == 1) {
        $("header .found .searchmetier").html('Métier trouvé')
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
        $('header .found').append('<p class="searchdomaine"></p>')
        i = 0
        $.each(donnees, function(index, value){
          $("header .found").append('<a href="shop.php?id='+ value.id + '" class = ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.nom + '</a>').show()
          i++
        })
        if (i >! 1) {
          $("header .found .searchdomaine").html('Domaines trouvés')
        }
        if (i == 1) {
          $("header .found .searchdomaine").html('Domaine trouvé')
        }
      }, etudiant)
    
    }
    
    function etudiant() {
      var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiant'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data)
        $('header .found').append('<p class="searchetudiant"></p>')
        i=0
        $.each(donnees, function(index, value){
          $("header .found").append('<a href="metier.php?id='+ value.id + '#'+ value.nom +'" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.prenom +' '+value.nom+'</a>').show()
          i++
        })
        if (i>! 1) {
          $("header .found .searchetudiant").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("header .found .searchetudiant").html('Étudiant trouvé')
        }
      }, check)


      function check() {
        $('header .notfound').html("")
            if ($('header .found').children().length < 4) {
              $('header .notfound').html("<p class='aucunresultat'>Nous n'avons rien trouvé 😥</p>")
         }
      } 
    }
   
  })

})