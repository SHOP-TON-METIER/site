
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

        
        $('.results').append('<p>Métiers trouvés : </p>')
        $.each(donnees, function(index, value){
          console.log(value.nom);
          $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
    
        if (value === '') {
          $(".results").html("Aucun métier trouvé")
        }

        })
        
    }, metier)


    }

    function metier(data) {
      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
         search : query,
         category : 'domaine'
        }
      })
    
      request.done(function (data) {
        $('.results').append('<p>Domaines trouvés : </p>')
        $.each(donnees, function(index, value){
          console.log(value);
          $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
    
        if (value === '') {
          $(".results").html("Aucun métier trouvé")
        }

        })
      
      }, domaine)
    
    }
    
    function domaine(data) {
      var request = $.ajax({
        url: "ajax.php",
        method: "POST",
        data: {
         search : query,
         category : 'etudiant'
        }
      })
    
      request.done(function (data) {
      }, etudiant)

    
    }
    
    function etudiant(data) {
    }
    
  })

  

})