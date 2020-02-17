$(window).on('load', function() {
    $(document).ready(function() {
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

        //movimiento del menu
        $('.smooth').click(function(e) {
            e.preventDefault();
            enlace = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(enlace).offset().top - 100
            }, 1200);
        });

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

        //VENTANA MODAL FORMULARIO ENVIO DE DATOS
        $('.open').on('click', function(e) {
            e.preventDefault();
            $("body").addClass("overflow");
            $("#window").show();
        });

        //CERRAR VENTANAS MODALES
        $('.close').on('click', function(e) {
            e.preventDefault();
            $("body").removeClass("overflow");
            $("#window").hide();
            $("#window-privacidad").hide();
        });

        //ENVIAR FORMULARIO POR AJAX
        $("#form-contacto").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#resultBuscar').html('<img src="img/cargando.gif">')
                },
                success: function(response) { 
                    console.log(response);
                },
                error: function() {}
            });
        });
    });
});