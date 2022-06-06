<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo AJAX</title>
    <script src="../js/ajax.js ">
    </script>
    <!-- <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
    <!-- <script src="../js/spin.min.js"></script> -->


</head>

<body>
    <form id="Formulario" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label>Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <label>Correo</label>
        <input type="text" name="correo" id="correo">
        <label>Telefono</label>
        <input type="text" name="telefono" id="telefono">
        <label>Contraseña</label>
        <input type="text" name="contraseña" id="contraseña">
        <label>Repetir contraseña</label>
        <input type="text" name="repContra" id="repContra">
        <input type="button" id="Enviar" name="enviar" value="enviar">

    </form>
    <div id="respuesta"></div>



</body>
<script>
    $('#Enviar').click(function() {
        $.ajax({
            url: '../controlador/ejecutar.php',
            type: 'POST',
            data: $('#Formulario').serialize(),
            success: function(res) {
                $('#respuesta').html(res)
            }
        });
    });
</script>
<script>

    let contador = 0;
    while (contador <= 10) {
        console.log(contador);
        contador++;
    }

    for(let i = 0; i <= 10; i++) {
        console.log("for" + i);

    }

    let numero = [10,20,30,40,50,60,70,80,90,100];

    for(i=0; i < numero.length; i++) { 
        console.log(numero[i]);
    }

    const persona = {
        nombre:'Jean Carlos',
        apellido: 'Gomez Quintero',
        edad:22
    }
    for (const propiedad in persona) { //for Para objetos
        // console.log(propiedad);
        console.log(`key ${propiedad} - ${persona[propiedad]} `);

        
    }
    let cadena = "Hola mundo";
    for(const caracter of cadena){ //for para arreglos o recorrer cada elemento de una variable
        console.log(caracter);

    }



</script>

</html>