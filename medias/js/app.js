
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
      console.log(query)

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

        
        $('.results').append('<p class="searchmetier">Métiers trouvés : </p>')
        $.each(donnees, function(index, value){
          $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
    
        if (value === '') {
          $('.searchmetier').remove();
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
        donnees = JSON.parse(data);
        
        console.log(donnees);
        $('.results').append('<p class="domaine">Domaines trouvés : </p>')
        $.each(donnees, function(index, value){
          $(".results").append('<a href="shop.php?id='+ value.id + '" class="results-items ' + value.nom.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
    
        if (value === '') {
          $('.domaine').hide();
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
        donnees = JSON.parse(data);

        $('.results').append('<p class="etudiant">Etudiants trouvés : </p>')
        $.each(donnees, function(index, value){
          $(".results").append('<a href="metier.php?id='+ value.id + '" class="results-items ' + value.nomShop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "") +'">' +
          value.nom + '</a>').show()
    
        if (value === '') {
          $('.etudiant').hide();
        } 
        })

      }, etudiant)

    
    }
    
    function etudiant(data) {
    }
    
  })

})