$(function () {
    if (!window.matchMedia){}
      var current = $('head > link[rel="icon"][media]');
      $.each(current, function(i, icon) {
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
  $(".results").css("left", searchposition+"px")
  
  $(window).on('resize', function(){
    searchposition = $(".searchbar").offset()
    $(".results").css("left", searchposition+"px")
});


    
    $(".searchbar").keyup(function(){
        var query = $(this).val()

        if(query==""){
          $(".results").hide()
          $(".results").html("")

        }else{

            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    search: query
                }, success: function(data) {
                  $(".results").html(data).show()

                  if (data=== '') {
                    $(".results").html("<p class='results-items'>Aucun métier trouvé</p>")
                  }
              }, error: function () {
                $(".results").html("<p class='results-items'>Erreur 404</p>")
                }
            })

        }
    })
})