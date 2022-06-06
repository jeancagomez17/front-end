<?php 
require('controlador.php');
$sen = new sentencias();

$datos = array(
    "email" => $_POST['correo'],
    "name" => $_POST['nombre'],
    "apel" => $_POST['apellido'],
    "telef" => $_POST['telefono'],
    "pass" => $_POST['contraseña'],
    "rePass" => $_POST['repContra']
);


if(isset($_POST['correo'])){
    $sen->insertar($datos);
    echo "Enviado";
}


?>