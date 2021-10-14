<?php
   // print_r($_POST);
    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $correo= $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña1 =$_POST['contraseña1'];
    $contraseña2 =$_POST['contraseña2'];
    $intereses= $_POST['intereses'];

    echo "
    <p>Nombre: $nombre</p>
    <p>Apellidos: $apellidos</p>
    <p>Correo: $correo</p>
    <p>Usuario: $usuario</p>
    <p>Contraseña1: $contraseña1</p>
    <p>Contraseña2: $contraseña2</p>
    Intereses:</br>
    ";



    foreach ($intereses as $interes){
        echo "$interes  </br>";
    }
    