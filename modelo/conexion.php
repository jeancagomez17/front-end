<?php



class Conexion{

    private $bd = "pruebafront";
    private $server = "localhost";
    private $user = "root";
    private $pass= "";
    public static $conex;

    public function __construct(){ //Conexion constructor
        self::$conex = new mysqli($this->server, $this->user, $this->pass, $this->bd);
        if(!self::$conex){
            echo "Error:";
        }else {
           
        }
        

    }

    public function select($dml){ //consulta a la bd

        try{
            $dml = mysqli_query(self::$conex, $dml);
            $i = 0; 
            while($consulta = mysqli_fetch_array($dml)){
                $lista[$i] = $consulta;
                $i++;
            }
            mysqli_free_result($dml);
        } catch(Exception $e){
            echo  "Error";
        }
        return $lista;
    }

    public function desconectar(){
        if(is_resource(self::$conex)){
            return self::$conex->close();
            
        }
        return false;
    }

    public function __destruct(){
        $this->desconectar();
        

    }



}

$conexion = new Conexion();
$conexion->__construct();






// $conexion = new Conexion();
// $conexion->conectar();

// $mostrar = "SELECT * FROM usuarios";
// $lista = $conexion->consulta($mostrar);

// for($i = 0; $i < count($lista); $i++){
//     echo '<br>';
//    echo $lista[$i]['nomb'];

// }