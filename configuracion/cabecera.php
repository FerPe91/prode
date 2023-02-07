
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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
  
  <link rel="stylesheet" href="../CSS/styleCabecera.css">
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between" style="background-color: #e3f2fdc2; height:100px; width:100%" >
    <a class="navbar-brand" style="height: 100%">
        <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE NACIONAL
    </a>

    <div style="display: flex; height: auto; width:200px" >
                <div style="height: auto; width:50px">
                <img src="../img/usuario.png" role= "button" class="nav-link"  style="height: 30px; width:30px; font-weight: bold; margin-left:7px"></img>
                <p>$<?php echo $SaldoUsuario["saldo"]?></p>
              </div>
                <div style="text-align: center; height: auto; width:50px; margin: 0px 15px 0px 15px">
                <img src="../img/Homee.png" role= "button" id="liveToastBtn" class="nav-link" onclick="location.href='home.php'" style="height: 30px; width:30px; margin:0px 15px 0px 15px"></img>
                <p>  Home</p>
              </div>
                <div>            
                <img src="../img/cerrar.png"  type= "button" class="nav-link" onclick="location.href='../index.php'" style="height: 30px; width:30px"></img>
                <p>Salir</p>
              </div>    
    </div> 
          
</nav>

</body>
</html>


