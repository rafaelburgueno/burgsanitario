<?php 

require_once "visitas.modelo.php";

/*===================================
    Obtener ip
===================================*/
function getRealIP() {
    if (isset($_SERVER["HTTP_CLIENT_IP"])){
        return $_SERVER["HTTP_CLIENT_IP"];
    }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
        return $_SERVER["HTTP_X_FORWARDED"];
    }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }elseif (isset($_SERVER["HTTP_FORWARDED"])){
        return $_SERVER["HTTP_FORWARDED"];
    }elseif (isset($_SERVER["REMOTE_ADDR"])){
        return $_SERVER["REMOTE_ADDR"];
    }else{
        return "no se obtuvo direccion ip";
    }
}



class VisitasControlador{

    public $accion;
    

    /*===================================
    Registrar visita
    ===================================*/

    public function guardarVisitaCtr(){

        $descripcion = $this->accion;
        $ip = getRealIP();

        $respuesta = VisitasModelo::registroVisitasMdl("registro_visitas", $descripcion, $ip);

       return $respuesta;

    }


    /*===================================
    Registrar clicks
    ===================================*/

    public function guardarClickCtr(){

        $dato = "Click en ".$this->accion;
        $ip = getRealIP();

        $respuesta = VisitasModelo::registroClickMdl("registro_visitas", $dato, $ip);

       echo $respuesta;

    }


}

/*===================================
Registrar visita
===================================*/
if( isset($_POST['visita']) ){

    $registro = new VisitasControlador();
    $registro->accion = $_POST['visita'];
    $registro->guardarVisitaCtr();

}

/*===================================
Registrar clicks
===================================*/
if( isset($_POST['click']) ){

    $click = new VisitasControlador();
    $click->accion = $_POST['click'];
    $click->guardarClickCtr();

}


