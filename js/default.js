(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=154629538030586";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function abrir(URL, W, H) {
    var width = W;
    var height = H;
    var left = 99;
    var top = 99;
    window.open(URL, 'janela', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
}

(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-41915337-1', 'radiohorizon.com.br');
ga('send', 'pageview');

$(document).ready(function() {
    $(".box_skitter_large").skitter({
        dots: true,
        focus_position: "leftTop",
        controls_position: "leftTop",
        numbers_align: "center",
        theme: "round",
        labelAnimation: "slideUp",
        show_randomly: true,
        hideTools: true,
        enable_navigation_keys: true,
        progressbar: true,
        focus: true,
        controls: true
    });
});

jQuery("document").ready(function($) {
    var nav = $('#menu');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            nav.addClass("navbar-fixed-top menu3");
        } else {
            nav.removeClass("navbar-fixed-top menu3");
        }
    });


});

jQuery("document").ready(function($) {
    var nav = $('#menu2');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            nav.addClass("menu4");
        } else {
            nav.removeClass("menu4");
        }
    });
});