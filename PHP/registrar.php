

<?php

require ('../configuracion/conexion.php');

if (isset($_POST["accion"])){

$Apellido = $_POST['apellido'];
$Nombre = $_POST['nombre'];
$Dni = $_POST['dni'];
$Telefono = $_POST['telefono'];
$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];
$Rcontraseña = $_POST['Rcontraseña'];
$Saldo = $_POST['saldo'];

$insertar = "INSERT INTO registro VALUES ('$Apellido', '$Nombre', '$Dni', '$Telefono', '$Usuario', '$Contraseña', '$Saldo' )";



$verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$Usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){ //verifica que la cantidad de usuario con ese numero no sea mayor a 0
    
  echo '
   <script type="text/javascript">
      $(document).ready(function(){ 
   Swal.fire({
    position: "center",
    icon: "error",
    title: "El usuario ya existe",
    showConfirmButton: false,
    timer: 1500
  });
});
  setTimeout( function() { window.location.href = "registrarHTML.php"; }, 1500 );
        </script>';
 
exit;
          
}

$verificar_dni = mysqli_query($conexion, "SELECT * FROM registro WHERE dni ='$Dni'");
if (mysqli_num_rows($verificar_dni) > 0){
    
   echo '
   <script type="text/javascript">
      $(document).ready(function(){ 
   Swal.fire({
    position: "center",
    icon: "error",
    title: "Ya existe un usuario con ese dni",
    showConfirmButton: false,
    timer: 1500
  });
});
  setTimeout( function() { window.location.href = "registrarHTML.php"; }, 1500 );
        </script>';
exit; //exit hace que corte  no ingrese los valores a la tabla
}

if ($Contraseña!=$Rcontraseña){

  echo '
   <script type="text/javascript">
      $(document).ready(function(){ 
   Swal.fire({
    position: "center",
    icon: "error",
    title: "Las claves no coinciden",
    showConfirmButton: false,
    timer: 1500
  });
});
  setTimeout( function() { window.location.href = "registrarHTML.php"; }, 1500 );
        </script>';  
exit;
}

//si pasa todas las verificaciones ingresamos los datos

$resultado = mysqli_query($conexion, $insertar);
echo '
<script type="text/javascript">
   $(document).ready(function(){ 
Swal.fire({
 position: "center",
 icon: "success",
title: "Usuario registrado",
 showConfirmButton: false,
 timer: 1500
});
});
setTimeout( function() { window.location.href = "../indexHTML.php"; }, 1500 );
     </script>';

  }?>

