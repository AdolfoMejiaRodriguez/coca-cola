$(window).on('load', function() {
    if ($(window).width() <= 1100) {
        //MOSTAR - OCULTAR MENU
        $(".menu_ico").on("click", function() {
            $(this).toggleClass("active");
            $(".togle_menu").slideToggle();
        });

        $(".togle_menu .item").on("click", function() {
            $(this).toggleClass("active");
            $(".togle_menu").slideToggle();
        });
    }

    //SLIDER INICIO DE PAGINA
    $('#adaptive').lightSlider({
        adaptiveHeight: true,
        item: 1,
        slideMargin: 0,
        loop: true
    });

    //Acordeon CEDIS
    $('.acordeon').on('click','h2',function(){
        var t = $(this);
        var tp = t.next();
        var p = t.parent().siblings().find('p');
        tp.slideToggle();
        p.slideUp();
    });
});