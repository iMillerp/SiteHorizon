jQuery("document").ready(function($){   
    var nav = $('#menu');    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            nav.addClass("navbar-fixed-top menu3");
        } else {
            nav.removeClass("navbar-fixed-top menu3");
        }
    });
    

});

jQuery("document").ready(function($){   
    var nav = $('#menu2');    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            nav.addClass("menu4");
        } else {
            nav.removeClass("menu4");
        }
    });
});