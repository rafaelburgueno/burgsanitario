/*=============================================
contador
=============================================*/
$(".tablas").on("click", ".btnEditarUsuario", function() {
    //$(".btnEditarUsuario").click(function(){

    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            console.log("ejecuto el ajax");

        }

    });

});



/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEditarUsuario", function() {
    //$(".btnEditarUsuario").click(function(){

    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            $('#editarNombre').val(respuesta['nombre']);
            $('#editarUsuario').val(respuesta['usuario']);

            $('#passwordActual').val(respuesta['password']);

            $('#editarPerfil').html(respuesta['perfil']);
            $('#editarPerfil').val(respuesta['perfil']);

            $('#fotoActual').val(respuesta['foto']);

            if (respuesta['foto'] != "") {

                $('.previsualizar').attr("src", respuesta['foto']);

            }

            console.log("ejecuto el ajax");


        }

    });

});


/*===============================================
ACTIVAR USUARIO
===============================================*/
$(".tablas").on("click", ".btnActivar", function() {
    //$(".btnActivar").click(function(){

    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {

            if (window.matchMedia("(max-width:767px)").matches) {

                swal({
                    title: "El usuario ha sido actualizado",
                    type: "success",
                    showConfirmButton: true,
                    confirmButtonText: "¡Cerrar!"
                }).then(function(result) {

                    if (result.value) {
                        window.location = "usuarios";
                    }

                })

            }

        }

    });

    if (estadoUsuario == 0) {

        $(this).addClass('btn-danger');
        $(this).removeClass('btn-success');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario', 1);

    } else {

        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoUsuario', 0);

    }


});



/*==================================
REVISAR USUARIO REGISTRADO
==================================*/
$('#nuevoUsuario').change(function() {

    $('.alert').remove();

    var usuario = $(this).val();

    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            if (respuesta) {
                $('#nuevoUsuario').parent().after('<div class="alert alert-warning">este usuario ya existe en la base de datos</div>');
                $('#nuevoUsuario').val('');
            }

        }

    });

});


/*===============================
ELIMINAR USUARIO
===============================*/
$(".tablas").on("click", ".btnEliminarUsuario", function() {
    //$(".btnEliminarUsuario").click(function(){

    var idUsuario = $(this).attr("idUsuario");
    var fotoUsuario = $(this).attr("fotoUsuario");
    var usuario = $(this).attr("usuario");

    swal({
        type: "warning",
        title: "¿Esta seguro de borrar el usuario?",
        text: "¡si no lo esta puede cancelar la accion!",
        showCancelButton: true,
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Si, borrar usuarior"
            //closeOnConfirm: false
    }).then(function(result) {
        if (result.value) {
            window.location = "index.php?ruta=usuarios&idUsuario=" + idUsuario + "&fotoUsuario=" + fotoUsuario + "&usuario=" + usuario;
        }
    })

});