$(function () {
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