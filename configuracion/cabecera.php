
<?php 
require ('conexion.php');


session_start();
$UsuarioI = $_SESSION["usuario"];

$Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
$datosUsuario = mysqli_fetch_array($Consulta);
$saldoU = $datosUsuario["saldo"];
$apellidoU = $datosUsuario["apellido"]; 
$nombreU = $datosUsuario["nombre"];
$dniU = $datosUsuario["dni"]; 
$telefonoU = $datosUsuario["telefono"];
$claveU = $datosUsuario["clave"]; 
$saldoU = $datosUsuario["saldo"]; 
$_SESSION['nombreU'] = $nombreU ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js\sweetalert2.all.min.js"></script>
    <script src="js\sweetalert2.all.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js\jquery-3.5.1.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\bootstrap-collapse.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  
  <link rel="stylesheet" href="../CSS/styleCabecera.css">
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between" style="background-color: #e3f2fdc2; height:100px; width:100%" >
    <a class="navbar-brand" style="height: 100%">
        <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">DINERO FICTICIO</img>
    </a>

    <div style="display: flex; height: auto; width:220px" >
                <div style="height: auto; width:50px">
                  <img src="../../img/usuario.png" role= "button" class="nav-link"  style="height: 30px; width:30px; font-weight: bold; margin-left:7px" data-bs-toggle="modal" data-bs-target="#exampleModal"></img>
                  <p>$<?php echo $datosUsuario["saldo"]?></p>
                </div>

                <div style="text-align: center; height: auto; width:50px; margin: 0px 0px 0px 0px">
                  <img src="../../img/info.png" type= "button" class="nav-link" style="height: 30px; width:30px; margin:0px 15px 0px 10px" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></img>
                  <p>  Info</p>
                </div>
                
                <div style="text-align: center; height: auto; width:50px; margin: 0px 15px 0px 0px">
                  <img src="../../img/Homee.png" role= "button" id="liveToastBtn" class="nav-link" onclick="location.href='../Home-Registrar/home.php'" style="height: 30px; width:30px; margin:0px 15px 0px 15px"></img>
                  <p>  Home</p>
                </div>

                <div>            
                  <img src="../../img/cerrar.png"  type= "button" class="nav-link" onclick="location.href='../../index.php'" style="height: 30px; width:30px"></img>
                  <p>Salir</p>
              </div>  
                
    </div> 
    
</nav>
</body>

<!-- Modal usuario -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content w-75 rounded-4 p-2 mx-auto ">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?php echo strtoupper($nombreU) ?>, <?php echo strtoupper($apellidoU) ?></h5>                      
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mx-auto py-2 d-flex flex-column justify-content-center align-items-center">
                      <img src="../../img/usuario.png" role= "button" class="mx-0"  style="height: 70px; width:70px; font-weight: bold; margin-left:7px background-color:blue;""></img>
                      <button type="button" name="editar perfil" id="editar perfil" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#ModalPerfil">Editar Perfil</button>                      
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <h5 class="modal-title py-2" id="exampleModalLabel">TU SALDO ES $ <?php echo $saldoU ?></h5>
                            <div class="mb-3"> 
                                <label for="saldo" class="form-label">INGRESA CANTIDAD</label>
                                <input type="number" class="form-control" name="saldo" id="saldo" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">INGRESA TU CLAVE</label>
                                <input type="password" class="form-control" name="contraseña" id="contraseña">
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="cargarSaldo" id="cargarSaldo" class="btn btn-primary">Cargar</button>
                                <button type="submit" name="retirarSaldo" id="retirarSaldo" class="btn btn-primary">Retirar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Perfil dentro del modal saldo -->
<div class="modal fade p-4" id="ModalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">EDITAR PERFIL</h5>
                    </div>
                    <div class="modal-body">
        <form class="row g-3" method="POST">
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name= "apellido" id="apellido" required value="<?php echo $apellidoU ?>">
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required value="<?php echo $nombreU ?>" > 
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="dni" class="form-label">Dni</label>
        <input type="number" class="form-control" name= "dni" id="dni" value="<?php echo $dniU ?>" required>
      </div>
      
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" name= "telefono" id="telefono" required value="<?php echo $telefonoU ?>">
      </div>
  
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="contraseña" class="form-label">Clave</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" required placeholder="ingrese su contraseña">          
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="Rcontraseña" class="form-label">Repetir Clave</label >
        <input type="password" class="form-control" name="Rcontraseña" id="Rcontraseña" required placeholder="repita su contraseña">                       
      </div>

      <div class="input-group input-group d-flex justify-content-end mb-6">
        <div class="col-12 input-group-text d-flex justify-content-between" id="inputGroup-sizing-default" class="form-check">
          <button type="button" class="btn btn-primary" onclick="location.href='home.php'">VOLVER</button>
          <button type="submit" class="btn btn-success" name="editarPerfil" >CONFIRMAR</button>
        </div>
      </div>      
    </form>
        </div>
    </div>
</div>
</div>
</html>

<?php 
function editarSaldo ($saldoU, $cuenta){
  require ('../../configuracion/conexion.php');
  $UsuarioI = $_SESSION["usuario"];
  $Saldo = $_POST['saldo'];
  $Contraseña = $_POST['contraseña'];
  
  $Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
  $DatosUsuario = mysqli_fetch_array($Consulta);

  if($cuenta=="suma"){
    $saldoU+=$Saldo;
  }else{
    $saldoU-=$Saldo; }

  if ($Contraseña!=$DatosUsuario["clave"]){

    echo '
    <script type="text/javascript">
        $(document).ready(function(){ 
    Swal.fire({
      position: "center",
      icon: "error",
      title: "La contraseña es incorrecta",
      showConfirmButton: false,
      timer: 1500
    });
  });
  </script>';  
 
  }elseif($saldoU<0){
      echo '
      <script type="text/javascript">
          $(document).ready(function(){
      Swal.fire({
      position: "center",
      icon: "error",
      title: "Saldo insuficiente",
      showConfirmButton: false,
      timer: 1500
    });
    });
    </script>';
  }else{
      $cargarSaldo="UPDATE registro SET saldo='$saldoU' where usuario = '$UsuarioI'";
      mysqli_query($conexion, $cargarSaldo);
      echo '
      <script type="text/javascript">
      $(document).ready(function(){
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Su saldo se actualizo correctamente",
        showConfirmButton: false,
        timer: 1500
      });
      });
      function reload(){
        window.location=document.location.href;}
        setTimeout(reload);
    </script>';
  }
};
function editarPerfil(){
  require ('../../configuracion/conexion.php');
  $UsuarioI = $_SESSION["usuario"];
  $Apellido = $_POST['apellido'];
  $Nombre = $_POST['nombre'];
  $Dni = $_POST['dni'];
  $Telefono = $_POST['telefono'];
  $Contraseña = $_POST['contraseña'];
  $Rcontraseña = $_POST['Rcontraseña'];

  if ($Contraseña!=$Rcontraseña){
    echo '
     <script type="text/javascript">
        $(document).ready(function(){ 
     Swal.fire({
      position: "center",
      icon: "error",
      title: "Operacion fallida. Las claves no coinciden",
      showConfirmButton: false,
      timer: 2500
    });
  });
  
  </script>';  
  

  }else{
      $editar="UPDATE registro SET apellido='$Apellido', nombre='$Nombre', dni='$Dni', telefono='$Telefono', clave='$Contraseña' where usuario = '$UsuarioI'";
      mysqli_query($conexion, $editar);
      echo '
      <script type="text/javascript"> 
        function reload(){
            window.location=document.location.href;
        }
        setTimeout(reload,0);
    </script>';
    }
}

if(isset($_POST["cargarSaldo"])){ 
  editarSaldo ($saldoU, "suma");
};
if(isset($_POST["retirarSaldo"])){ 
  editarSaldo ($saldoU, "resta");
};
if(isset($_POST["editarPerfil"])){ 
  editarPerfil ();
};
?>

