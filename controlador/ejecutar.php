<?php 
require('controlador.php');
$sen = new sentencias();

$nomb = $_POST['nombre'];
$email = $_POST['correo'];
$apel = $_POST['apellido'];
$pass = $_POST['contraseña'];
$telef = $_POST['telefono'];
$resPass = $_POST['repContra'];

if(isset($_POST['correo'])){
    $sen->insertar($email, $nomb, $apel, $telef, $pass, $resPass);
    echo "Enviado";
}


?>