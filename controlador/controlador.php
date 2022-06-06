<?php
require_once('../modelo/conexion.php');

class sentencias extends Conexion{

    public function Mostrar($campos, $condicion, $tabla) {
        $dml = null;
        if (!empty($condicion)) {
            $dml = "SELECT $campos FROM $tabla WHERE $condicion ;";
        } else {
            $dml = "SELECT $campos FROM $tabla;";
        }
        $lista = parent::select($dml);
        return $lista;
    }

    public function insertar($email, $name, $apel, $telef, $pass, $repPass){
        $sql = "INSERT INTO usuarios VALUES ('$email', '$name', '$apel',  '$telef', '$pass', '$repPass');";
        $ejecutar = mysqli_query(self::$conex, $sql);
        return $ejecutar;
    }


}


?>