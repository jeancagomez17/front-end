<?php



class Conexion{

     public static $conexion;
     
     public static function conectar(){
         $servidor = "localhost";
         $user = "root";
         $password = "";
         $bd = "pruebafront";
        self::$conexion = new mysqli($servidor, $user, $password, $bd);
    }

    function consulta($mostrar){
        try{
            $dml = mysqli_query(self::$conexion, $mostrar);
            $i = 0;
            while($consulta = mysqli_fetch_array($dml)){
                $lista[$i] = $consulta;
                $i++;
            }
            mysqli_free_result($dml);

        }catch(Exception $e){
            echo "Error";
        }
        return $lista;

    }
}


$conexion = new Conexion();
$conexion->conectar();

// $mostrar = "SELECT * FROM usuarios";
// $lista = $conexion->consulta($mostrar);

// for($i = 0; $i < count($lista); $i++){
//     echo '<br>';
//    echo $lista[$i]['nomb'];

// }