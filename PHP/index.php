<?php

require ('configuracion/conexion.php');

if (isset($_POST["accion"])){ 
  
  $Usuario = $_POST['usuario'];
  $Clave = $_POST['clave'];

$verificar_cuenta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$Usuario' AND clave = '$Clave'");

if(mysqli_num_rows($verificar_cuenta) == 0){
    echo '
    <script type="text/javascript">
      $(document).ready(function(){

        Swal.fire({
        position: "center",
        icon: "error",
        title: "Usuario y/o clave incorrecta",
        showConfirmButton: false,
        timer: 1500
        });
      });
    setTimeout( function() { window.location.href = "indexHTML.php"; }, 1500 );
    </script>
  ';   
 exit;

}else{
    echo '
    <script>
    Swal.fire({
     position: "center",
     icon: "error",
     title: "va todo ok",
     showConfirmButton: false,
     timer: 1500
   })
    </script>
    ';
       
  
  }
  
  session_start();
  $_SESSION["usuario"] = htmlentities($_POST['usuario']); //tomo el dato del usuario para usarlo en otra pagina (cabecera)
 
  header("location: PHP/home.php");
}  





?>

