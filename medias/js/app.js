
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

  $(".found").hide()

  searchposition = $(".searchbar").offset()
  $(".found").css("left", searchposition + "px")

  $(window).on('resize', function () {
    searchposition = $(".searchbar").offset()
    $(".found").css("left", searchposition + "px")
  });

  $(".searchbar").keyup(function () {
    var query = $(this).val()  

    if (query == "") {
      $(".found").html("")
      $(".notfound").html("")

    } else {
      query = query

      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
            search : query,
            category : 'metier'
        }
    })
    request.done(function(data) {
      donnees = JSON.parse(data);        
      $('.found').append('<p class="searchmetier"></p>')
      i = 0
      $.each(donnees, function(index, value){
        $(".found").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
        value.nom + '</a>').show()
        i++
      })
      if (i >! 1) {
        $(".found .searchmetier").html('Métiers trouvés')
      }
      if (i == 1) {
        $(".found .searchmetier").html('Métier trouvé')
      }
    }, domaine)

    }

    function domaine() {
      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
         search : query,
         category : 'domaine'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data);
        $('.found').append('<p class="searchdomaine"></p>')
        i = 0
        $.each(donnees, function(index, value){
          $(".found").append('<a href="shop.php?id='+ value.id + '" class = ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.nom + '</a>').show()
          i++
        })
        if (i >! 1) {
          $(".found .searchdomaine").html('Domaines trouvés')
        }
        if (i == 1) {
          $(".found .searchdomaine").html('Domaine trouvé')
        }
      }, etudiant)
    
    }
    
    function etudiant() {
      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiant'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data)
        $('.found').append('<p class="searchetudiant"></p>')
        i=0
        $.each(donnees, function(index, value){
          $(".found").append('<a href="metier.php?id='+ value.id + '" class = ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'>' +
          value.prenom +' '+value.nom.toLowerCase().charAt(0).toUpperCase()+value.nom.toLowerCase().slice(1)+'</a>').show()
          i++
        })
        if (i>! 1) {
          $(".found .searchetudiant").html('Étudiants trouvés')
        }
        if (i == 1) {
          $(".found .searchetudiant").html('Étudiant trouvé')
        }
      }, check)


      function check() {
        $('.notfound').html("")

        if ($('.found').children().length < 4) {
          $('.notfound').html("<p class='aucunresultat'>Nous n'avons rien trouvé 😥</p>")
     }
      } 
    }
   
  })

})