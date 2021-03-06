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
    public $fecha;
    
    
    /*===================================
    Registrar visita
    ===================================*/
    
    public function guardarVisitaCtr(){
        
        date_default_timezone_set('America/Montevideo');

        $descripcion = $this->accion;
        // $fecha = $this->fecha;
        $fecha = date("Y-m-d H:i:s");
        $ip = getRealIP();

        $respuesta = VisitasModelo::registroVisitasMdl("registro_visitas_2", $descripcion, $ip, $fecha);

       echo $respuesta;

    }


    /*===================================
    Registrar clicks
    ===================================*/

    public function guardarClickCtr(){

        date_default_timezone_set('America/Montevideo');

        $dato = "Click en ".$this->accion;
        // $fecha = $this->fecha;
        $fecha = date("Y-m-d H:i:s");
        $ip = getRealIP();

        $respuesta = VisitasModelo::registroClickMdl("registro_visitas_2", $dato, $ip, $fecha);

       echo $respuesta;

    }


}

/*===================================
Registrar visita
===================================*/
if( isset($_POST['visita']) ){

    $registro = new VisitasControlador();
    $registro->accion = $_POST['visita'];
    $registro->fecha = $_POST['fecha'];
    $registro->guardarVisitaCtr();

}

/*===================================
Registrar clicks
===================================*/
if( isset($_POST['click']) ){

    $click = new VisitasControlador();
    $click->accion = $_POST['click'];
    $click->fecha = $_POST['fecha'];
    $click->guardarClickCtr();

}


