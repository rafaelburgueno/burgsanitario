// console.log("se ejecuta bien el ajax.....");

/*=============================================
contador de visitas
=============================================*/
/*$(document).ready(function() {

    var accion = "Un usuario ha visitado la pagina (msj desde jquery)";

    var datos = new FormData();
    datos.append("visita", accion);

    $.ajax({
        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta);
        }
    });

});*/


/*=============================================
click
=============================================*/
$("a").on("click", function() {

    var accion = $(this).attr("title");

    var datos = new FormData();
    datos.append("click", accion);

    $.ajax({

        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta + '. Click en ' + accion);
        }

    });

});




/*=============================================
click en fotos
=============================================*/
$("img").on("click", function() {

    var accion = $(this).attr("src");

    var datos = new FormData();
    datos.append("click", accion);

    $.ajax({

        url: "visitas.controlador.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            console.log(respuesta + '. Click en ' + accion);
        }

    });

});