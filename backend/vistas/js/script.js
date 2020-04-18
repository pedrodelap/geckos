/*=============================================
ORDENAR SLIDE     
=============================================*/

/* Ordenar Slide */
var almacenarOrdenImagen = new Array();
var cambioOrdenImagen = false;

$("#ordenarSlide").click(function() {

    $("#columnasSlide").css({ "cursor": "move" })
    $("#columnasSlide span").hide()

    $("#columnasSlide").sortable({
        revert: true,
        connectWith: ".bloqueSlide",
        handle: ".handleImg",
        stop: function(event, ui) {

            cambioOrdenImagen = true;

            for (var i = 0; i < $("#columnasSlide li").length; i++) {

                almacenarOrdenImagen[i] = event.target.children[i].children[1].src;

            }
        }
    })

    $("#ordenarSlide").hide();
    $("#guardarSlide").show();

})

/* Guardar Orden Slide */

$("#guardarSlide").click(function() {

    if (cambioOrdenImagen) {

        $("#textoSlide ul").html("")

        for (var i = 0; i < $("#columnasSlide li").length; i++) {

            $("#textoSlide ul").append('<li><span class="fa fa-pencil" style="background:blue"></span><img src="' + almacenarOrdenImagen[i] + '" style="float:left; margin-bottom:10px" width="80%"><h1></h1><p></p></li>')
        }
    }

    $("#columnasSlide").css({ "cursor": "auto" })
    $("#columnasSlide span").show()

    $("#columnasSlide").disableSelection();

    $("#ordenarSlide").show();

    $("#guardarSlide").hide();

})


/*=====  Fin de ORDENAR SLIDE   ======*/

/*=============================================
GALERÍA         
=============================================*/

$("ul#lightbox li a").fancybox({

    openEffect: 'elastic',
    closeEffect: 'elastic',
    openSpeed: 150,
    closeSpeed: 150,
    helpers: { title: { type: 'inside' } }

});

/*=====  Fin de GALERÍA   ======*/