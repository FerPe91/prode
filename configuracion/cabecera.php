
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
     


    <link rel="stylesheet" href="C:\wamp\www\prode\node_modules\sweetalert2\dist\sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="C:\wamp\www\prode\node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="C:\wamp\www\prode\node_modules\sweetalert2\dist\sweetalert2.all.js"></script>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="C:\wamp\www\prode\js\jquery-3.5.1.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="C:\wamp\www\prode\js\bootstrap-collapse.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  

</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between" style="background-color: #e3f2fdc2;">
    <a class="navbar-brand" href="#">
        <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE NACIONAL
    </a>
    <h1 class="navbar-brand" style= "font-family: sans-serif;
    font-size: 280%">
    
</h1>
    <ul class="navbar-nav">
            
            <li>
                <div class="row">
                    <a style="color:black; font-weight: bold;">Usuario: <?php echo $UsuarioI ?></a>
                </div>    
                <div class="row">
                    <a style="color:black;font-weight: bold;">Saldo: $ <?php echo $SaldoUsuario["saldo"]?></a>
            </li>
        
            <li class="nav-item">
            <img src="../img/Homee.png"  type= "button" class="nav-link" onclick="location.href='home.php'" style="height: 45px; width:45px; font-weight: bold" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom"></img>
            </li>
            <li class="nav-item">
            <img src="../img/cerrar.png"  type= "button" class="nav-link" onclick="location.href='../index.php'" style="height: 45px; width:45px; font-weight: bold"></img>
            </li>
    </ul>
  </nav>
>
         
    </body>


    </html>




    

