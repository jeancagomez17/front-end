<?php
require_once('conexion.php');

class controlador extends Conexion{

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

$con = new controlador();
$tabla = "usuarios";
$condicion = " nomb = 'jean' ";
$lista = $con->Mostrar("nomb", $condicion, $tabla);

for($i = 0; $i < count($lista); $i++){
   echo $lista[$i]['nomb'];
//    echo $lista[$i]['apel'];
}


?>