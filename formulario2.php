<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //print_r($_POST);
        $usuario = $_POST['usuario'];
        $contraseña1 = $_POST['contraseña1'];
        $contraseña2 = $_POST['contraseña2'];
        //echo $usuario . "</br>" . $contraseña1 . "</br>" . $contraseña2; 

    ?>


    <form name="formulario2" method="POST" action="formulario3.php">
        Nombre: <input name="nombre" type="text" id="nombre"></br>
        <p>Apellidos: <input name="apellidos" type="text" id="apellidos"></br></p>
        <p>Correo electronico: <input name="correo" type="mail" id="correo"></br></p>
        <input name="usuario" type="hidden" id="usuario" value="<?php echo $usuario?>"></br>
        <input name="contraseña1" type="hidden" id="contraseña1"value="<?php echo $contraseña1?>"></br>
        <input name="contraseña2" type="hidden" id="contraseña2"value="<?php echo $contraseña2?>"></br>
        <button name="enviar" type="submit">Enviar</button>
    </form>    

</body>

</html>