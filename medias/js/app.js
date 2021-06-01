
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

  $(".results").hide()

  searchposition = $(".searchbar").offset()
  $(".results").css("left", searchposition + "px")

  $(window).on('resize', function () {
    searchposition = $(".searchbar").offset()
    $(".results").css("left", searchposition + "px")
  });



  $(".searchbar").keyup(function () {
    var query = $(this).val()
    

    if (query == "") {
      $(".results").hide()
      $(".results").html("")

    } else {
      query = query+"%"

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
      $('.results').append('<div class="searchmetier"><p></p></div>')    
      i = 0
      $.each(donnees, function(index, value){
        $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
        value.nom + '</a>').show()
        i++
      })
      if (i >! 1) {
        $(".results .searchmetier p").html('Métiers trouvés')
      }
      if (i == 1) {
        $(".results .searchmetier p").html('Métier trouvé')
      }  
        
    }, domaine)

    }

    function domaine(data) {
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
        $('.results').append('<div class="searchdomaine"><p></p></div>')
        j = 0
        $.each(donnees, function(index, value){
          $(".results").append('<a href="shop.php?id='+ value.id + '" class="results-items ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
          j++
        })
        if (j >! 1) {
          $(".results .searchdomaine p").html('Domaines trouvés')
        }
        if (j == 1) {
          $(".results .searchdomaine p").html('Domaine trouvé')
        }  
      
      }, etudiant)
    
    }
    
    function etudiant(data) {
      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiant'
        }
      })
    
      request.done(function (data) {
        donnees = JSON.parse(data);
        $('.results').append('<div class="searchetudiant"><p></p></div>')
        k=0
        $.each(donnees, function(index, value){
          $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
          k++
        })
        if (k >! 1) {
          $(".results .searchetudiant p").html('Étudiants trouvés')
        }
        if (k == 1) {
          $(".results .searchetudiant p").html('Étudiant trouvé')
        }  

      })

    
    }
   
  })

})