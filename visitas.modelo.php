<?php

require_once "visitas.conexion.php";

class VisitasModelo extends Conexion{

    /*=============================
    Registro visitas
    =============================*/
    public function registroVisitasMdl($tabla, $descripcion, $ip){

        // $prueba = "string desde el modelo";

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (accion, ip ) VALUES(:accion, :ip)");

        $stmt->bindParam(":accion", $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(":ip", $ip, PDO::PARAM_STR);


        if($stmt->execute()){
            return "exito";
        }else{
            return "error";
        }

        $stmt->close();

    }
    

    /*=============================
    Registro visitas
    =============================*/
    public function registroClickMdl($tabla, $dato, $ip){

        // me quede por aca!!!!!!!!!!!!!!!

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (accion, ip ) VALUES(:accion, :ip)");

        $stmt->bindParam(":accion", $dato, PDO::PARAM_STR);
        $stmt->bindParam(":ip", $ip, PDO::PARAM_STR);


        if($stmt->execute()){
            return "exito";
        }else{
            return "error";
        }

        $stmt->close();

	}


    /*=============================
    TABLA sin parametros
    =============================*/

    /*public function tablaMdl($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT id, nota, fecha FROM $tabla ORDER BY id DESC");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }

    /*=============================
    TABLA-BUSQUEDA con parametros
    =============================*/

    /*public function buscarTablaMdl($buscar, $tabla){

        $buscar = "%".$buscar."%";

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nota LIKE :buscar ORDER BY id DESC");
                                            //SELECT * FROM notas WHERE nota LIKE '%$palabra%' ORDER BY id DESC
        $stmt->bindParam(":buscar", $buscar, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }



    /*========================================
    ACTUALIZAR
    ========================================*/
    /*public function actualizarNotaMdl($id, $nota, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nota = :nota WHERE id = :id");

        $stmt->bindParam(":nota", $nota, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt->execute()){
            return "exito";
        }else{
            return "error";
        }

        $stmt->close();

    }


    /*========================================
    BORRAR ID
    ========================================*/
    /*public function borrarIdMdl($id, $tabla){

//DELETE FROM `notas` WHERE `notas`.`id` = 33"
        $stmt = Conexion::conectar()->prepare("DELETE  FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt->execute()){
            return "exito";
        }else{
            return "error";
        }

        $stmt->close();

    }

    /*========================================
    CREAR
    ========================================*/
    /*public function crearNotaMdl($datos, $tabla){
//INSERT INTO `notas`(`id`, `nota`, `fecha`) VALUES ([value-1],[value-2],[value-3])
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nota) VALUES(:nota)");

        $stmt->bindParam(":nota", $datos, PDO::PARAM_STR);

        if($stmt->execute()){
            return "exito";
        }else{
            return "error";
        }

        $stmt->close();

    }*/





}

 ?>