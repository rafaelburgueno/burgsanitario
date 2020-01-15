/*=============================================
registro al carga la pagina
=============================================*/
$(document).ready(function() {

    var accion = "se cargo la pagina (jquery)";

    var datos = new FormData();
    datos.append("visita", accion);
    datos.append("fecha", new Date());

    $.ajax({

        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta + " -- " + accion);
        }

    });

});


/*=============================================
click
=============================================*/
$(".click-registro").on("click", function() {

    var accion = $(this).attr("title");

    var datos = new FormData();
    datos.append("click", accion);
    datos.append("fecha", new Date());

    $.ajax({

        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta + '. Click - ' + accion);
        }

    });

});




/*=============================================
click en fotos
=============================================*/
$("img").on("click", function() {

    var accion = $(this).attr("alt");

    var datos = new FormData();
    datos.append("click", accion);
    datos.append("fecha", new Date());

    $.ajax({

        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta + '. Click - ' + accion);
        }

    });

});