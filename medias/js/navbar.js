$(function () {
    $(window).scroll(function() {
        var y = $(window).scrollTop()
        if(y >= 5){
            $(".navbar-border").css("opacity", "0.6")
        }
        else {
            $(".navbar-border").css("opacity", "0")
        }
    });
})