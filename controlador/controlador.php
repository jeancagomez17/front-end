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

    public function insertar($datos = array()) {

        foreach ($datos as $key => $value) { //crear un foreach para la creacion y asignacion de valores
            $$key = $value; // creca una variable con el nombre del valor que trae
        }
        $sql = "INSERT INTO usuarios VALUES ('$email', '$name', '$apel',  '$telef', '$pass', '$rePass');"; //Inserta los valores de las variables creadas
        $ejecutar = mysqli_query(self::$conex, $sql);//enviar los valores
        return $ejecutar;
    }

    


}


?>