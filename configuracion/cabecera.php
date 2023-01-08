
<?php 
require ('conexion.php');

session_start();
$UsuarioI = $_SESSION["usuario"];

$Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
$SaldoUsuario = mysqli_fetch_array($Consulta) //en la variable $SaldoUsuario guardo toda la consulta, cuando lo imprima pondre entre corchetes que campo quiero mostrar
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/styleHome.css">
    <link rel="stylesheet" href="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="C:\wamp\www\apuestasDeportivas\js\jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between" style="background-color:  #e3f2fdc2;">
    <a class="navbar-brand" href="#">
        <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE NACIONAL
    </a>
    <ul class="navbar-nav">
            <div class="col- mr-4">
                <span style="color:#00FFFF;">
                    <i class="fa-solid fa-user fa-1xl"></i>
                </span>
            </div>
            <li>
                <div class="row">
                    <a style="color:#00FFFF; font-weight: bold;">Usuario: <?php echo $UsuarioI ?></a>
                </div>    
                <div class="row">
                    <a style="color:#00FFFF;font-weight: bold;">Saldo: $ <?php echo $SaldoUsuario["saldo"]?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=> </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="\prode\indexHTML.php">Cerrar Sesión</a>
            </li>
    </ul>
        

  </nav>

         
    </body>
    </html>




    

