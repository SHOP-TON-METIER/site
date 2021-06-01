
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

  $("header .found").hide()

  searchposition = $(".searchbar").offset()
  $("header .found").css("left", searchposition + "px")

  $(window).on('resize', function () {
    searchposition = $(".searchbar").offset()
    $("header .found").css("left", searchposition + "px")
  });

  $(".searchbar").keyup(function () {
    var query = $(this).val()  

    if (query == "") {
      $("header .found").html("")
      $(".noheader .found").html("")

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
      $('header .found').append('<div class="searchmetier"><p></p><div class="content"></div></div>')
      i = 0
      $.each(donnees, function(index, value){
        $("header .found .searchmetier .content").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
        value.nom + '</a>').show()
        i++
      })
      if (i >! 1) {
        $("header .found .searchmetier p").html('Métiers trouvés')
      }
      if (i == 1) {
        $("header .found .searchmetier p").html('Métier trouvé')
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
        $('header .found').append('<div class="searchdomaine"><p></p><div class="content"></div></div>')
        i = 0
        $.each(donnees, function(index, value){
          $("header .found .searchdomaine .content").append('<a href="shop.php?id='+ value.id + '" class = ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.nom + '</a>').show()
          i++
        })
        if (i >! 1) {
          $("header .found .searchdomaine p").html('Domaines trouvés')
        }
        if (i == 1) {
          $("header .found .searchdomaine p").html('Domaine trouvé')
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
        $('header .found').append('<div class="searchetudiant"><p></p><div class="content"></div></div>')
        i=0
        $.each(donnees, function(index, value){
          $("header .found .searchetudiant .content").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.prenom +' '+value.nom.toLowerCase().charAt(0).toUpperCase()+value.nom.toLowerCase().slice(1)+'</a>').show()
          i++
        })
        if (i>! 1) {
          $("header .found .searchetudiant p").html('Étudiants trouvés')
        }
        if (i == 1) {
          $("header .found .searchetudiant p").html('Étudiant trouvé')
        }
      }, check)


      function check() {
        $('header .notfound').html("")

    //     if ($('.found').children().length < 4) {
    //       $('.notfound').html("<p class='aucunresultat'>Nous n'avons rien trouvé 😥</p>")
    //  }
      } 
    }
   
  })

})