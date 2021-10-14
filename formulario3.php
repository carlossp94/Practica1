<?php
    //print_r($_POST);
    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $correo= $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña1 =$_POST['contraseña1'];
    $contraseña2 =$_POST['contraseña2'];

   // echo $nombre. $apellidos. $correo. $usuario;

  //  print_r($_POST);

  echo "
  <form name='formulario3' method='POST' action='formulario4.php'>
  <input name='nombre' type='hidden' id='nombre' value='$nombre'></br>
  <p><input name='apellidos' type='hidden' id='apellidos' value='$apellidos'></br></p>
  <p><input name='correo' type='hidden' id='correo' value='$correo'></br></p>
  <input name='usuario' type='hidden' id='usuario' value='$usuario'></br>
  <input name='contraseña1' type='hidden' id='contraseña1' value='$contraseña1'></br>
  <input name='contraseña2' type='hidden' id='contraseña2' value='$contraseña2'></br>
  Coche <input name='intereses[]' type='checkbox' value='coche'>
  Moto <input name='intereses[]' type='checkbox' value='moto'>
  Tren <input name='intereses[]' type='checkbox' value='tren'>
  Avion <input name='intereses[]' type='checkbox' value='avion'>
  <button name='enviar' type='submit'>Enviar</button>
  </form>
  
  ";
?>