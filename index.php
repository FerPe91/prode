<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js\jquery-3.5.1.js"></script>
   
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js\sweetalert2.all.min.js"></script>
    <script src="js\sweetalert2.all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Index</title>
</head>
<body class="bodyIndex">    
    <div class="container">
        <div class="formulario ">
            <div class="align-self-center width=100">
              <img src="./img/logo2.png" class="mx-auto d-block" alt="logo" width="150" height="90">
            </div>
            <form method="POST">
                <div class="mb-3">
                    <label  class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="clave" id="clave" required>
                </div>
                <button type="submit" class="btn btn-primary" name="accion" >Entrar</button>
                <button type="button" class="btn btn-primary" onclick="location.href='PHP/Home-Registrar/registrar.php'">Registrar</button>
            </form>  
            <button class="btn btn-warning mt-2" type="button" onclick="location.href='PHP/Home-Registrar/recuperarUsuario.php'">
              Olvidaste tu contraseña?
            </button>   
        </div>

    </div>

</body>

</html>

<?php
require ('configuracion/conexion.php');

if (isset($_POST["accion"])){ 
  
  $Usuario = $_POST['usuario'];
  $Clave = $_POST['clave'];

  session_start();
  $_SESSION["usuario"] = $Usuario;
 

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
      function reload(){
        window.location=document.location.href;}
    </script>
  ';   
exit;

}else{

echo '
<script type="text/javascript">
   
  setTimeout( function() { window.location.href = "PHP/Home-Registrar/home.php"; });
  </script>'; 
}    
  
}  
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
