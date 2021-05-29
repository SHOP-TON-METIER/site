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
    
    $("#searchbar").keyup(function(){
        var query = $(this).val()

        if(query==""){

            $("#results").html("")

        }else{

            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    search: query
                }, success: function(data) {
                    $("#results").html(data).show()
                }
            })

        }
    })
})