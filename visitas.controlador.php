<?php
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxUsuarios{


    /*===================================
    EDITAR USUARIO
    ===================================*/
    public $idUsuario;
    public function ajaxEditarUsuario(){

        $item = "id";
        $valor = $this->idUsuario;

        $respuesta = ControladorUsuarios::ctrAjaxMostrarUsuarios($item, $valor);

        echo json_encode($respuesta);
        //echo "desde el archivo ajax, el valor es: ".$valor;

    }


    /*===================================
    ESTADO USUARIO
    ===================================*/
    public $activarId;
    public $activarUsuario;
    public function ajaxActivarUsuario(){

        $tabla = "usuarios";
        $item1= "estado";
        $valor1 = $this->activarUsuario;
        $item2= "id";
        $valor2 = $this->activarId;

        $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);



    }


    /*==========================================
    VALIDAR USUARIO
    ==========================================*/
    public $validarUsuario;
    public function ajaxValidarUsuario(){

        $item = "usuario";
        $valor = $this->validarUsuario;

        $respuesta = ControladorUsuarios::ctrAjaxMostrarUsuarios($item, $valor);

        echo json_encode($respuesta);
        //echo "desde el archivo ajax, el valor es: ".$valor;


    }



}

/*===================================
EDITAR USUARIO
===================================*/
if( isset($_POST['idUsuario']) ){

    $editar = new AjaxUsuarios();
    $editar->idUsuario = $_POST['idUsuario'];
    $editar->ajaxEditarUsuario();


}


/*===================================
ESTADO USUARIO
===================================*/
if( isset($_POST['activarUsuario']) ){

    $estado = new AjaxUsuarios();
    $estado->activarId = $_POST['activarId'];
    $estado->activarUsuario = $_POST['activarUsuario'];
    $estado->ajaxActivarUsuario();

}


/*==========================================
VALIDAR USUARIO
==========================================*/
if( isset($_POST['validarUsuario']) ){

    $valUsuario = new AjaxUsuarios();
    $valUsuario->validarUsuario = $_POST['validarUsuario'];
    $valUsuario->ajaxValidarUsuario();

}