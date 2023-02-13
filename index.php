<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="C:\wamp\www\apuestasDeportivas\js\jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd00;">
        <a class="navbar-brand" href="#">
            <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE DINERO FICTICIO
        </a>
    </nav>
    
    <div class="container">
        <div class="formulario ">
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
            
            <button class="btn btn-warning mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Olvidaste tu contraseña?
            </button>
          <div class="collapse" id="collapseExample">
            <h6>Pregunta de seguridad</h6>
            <div class="d-flex flex-row justify-content-evenly align-items-center">
              <p class="my-auto">¿Que dia naciste?</p> 
              <input type="date" class="form-control w-50" name="PreguntaSeg" id="PreguntaSeg" required placeholder="Ingrese su fecha" required>
            </div>
          </div>
        </div>
        
        <footer>
            
    
        </footer>

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