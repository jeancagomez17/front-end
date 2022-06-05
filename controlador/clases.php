<?php 

class perro {
    //atributos 
    public $nombre;
    public $raza;
    public $edad;
    public $sx;
    public $imagen;
    public $comida;
    private $pulgas;
    public static $best_friend = "Hombre";


    //metodo magico, inicializa el objeto automaticamente cuando se instancia la clase 
    public function __construct($n, $r, $e, $sx, $ima, $pulgas){
        $this->nombre = $n;
        $this->raza = $r;
        $this->edad = $e . "años";
        $this->sx = ($sx) ? 'Macho ' : 'Hembra';
        $this->imagen = $ima;
        $this->pulgas = $pulgas;
        echo "<mark> Hola soy el metodo constructor </mark>";


    }


    //metodos 
    public function ladra(){
        echo "<p> <mark> gua gua ! </mark> </p>";

    }
    public function comer($c){
        $this->comida = $c;

        echo "<p><mark> $this->nombre  come $this->comida </mark> </p>";


    }
    public function aparecer(){
        
        
    }
    public function tiene_pulgas(){
        echo ($this->pulgas) ? 'Si tiene' : 'No tiene';
    }

    public function ladrar_y_comer(){
        self::ladra();
        Perro::comer('huesos');
        echo Perro::$best_friend;
    }

    //metodo magicos 



    public function __destruct(){
        echo "<mark> Hola soy el metodo destructor </mark>";

        
    }
}


//Instanciar un objeto de la clase 
$drako = new Perro('Drako', 'chanda', 5, true, 'foto', false);

var_dump($drako);
echo "<br>";

echo $drako->nombre;
$drako->ladra();
$drako->comer('Carne');
$drako->tiene_pulgas();
$drako->ladrar_y_comer();


?>