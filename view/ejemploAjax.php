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

</html>