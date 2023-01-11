
<?php

function cargarApuesta($fecha){
  require ('../configuracion/conexion.php');

  $UsuarioI = $_SESSION["usuario"];
  $ValorApuesta = $_SESSION["valorApuesta"];
  
$verificar_unica_apuesta = mysqli_query($conexion, "SELECT * FROM apuesta_eliminatorias WHERE usuario ='$UsuarioI'");
  if (mysqli_num_rows($verificar_unica_apuesta) > 0){ 
    $UsuarioI = $UsuarioI."(2)";}

  $P1 = $_POST['p1'];
  $P2 = $_POST['p2'];
  $P3 = $_POST['p3'];
  $P4 = $_POST['p4'];
  $P5 = $_POST['p5'];
  $P6 = $_POST['p6'];
  $P7 = $_POST['p7'];
  $P8 = $_POST['p8'];
  $P9 = $_POST['p9'];
  $P10 = $_POST['p10'];

  $insertar = "INSERT INTO apuesta_eliminatorias VALUES ('$UsuarioI', '$fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10', '0' )";
  
  $Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
  $SaldoUsuario = mysqli_fetch_array($Consulta); //en la variable $SaldoUsuario guardo toda la consulta, cuando lo imprima pondre entre corchetes que campo quiero mostrar
   
  if($SaldoUsuario["saldo"]<$ValorApuesta){
    echo '
    <script type="text/javascript">
        $(document).ready(function(){
    Swal.fire({
    position: "center",
    icon: "error",
    title: "Su saldo es insuficiente",
    showConfirmButton: false,
    timer: 1500
  });
  });
  setTimeout( function() { window.location.href = "apuestaEliminatoriaHTML.php"; }, 1500 );
  </script>';

  }else{
  mysqli_query($conexion, $insertar);
  
  $saldoNuevo = $SaldoUsuario["saldo"] - $ValorApuesta;
  $actualizarSaldo = "UPDATE registro SET saldo = '$saldoNuevo' WHERE usuario = '$UsuarioI'";
  mysqli_query($conexion, $actualizarSaldo);

    echo '
    <script type="text/javascript">
        $(document).ready(function(){
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Apuesta aceptada",
    showConfirmButton: false,
    timer: 1500
  });
  });
  setTimeout( function() { window.location.href = "home.php"; }, 1500 );
  </script>';
  };
}


///////////////////////////////////////////////////////////////////////////////

if (isset($_POST["apostar1y2"])){
  cargarApuesta("fecha1y2");
}

if (isset($_POST["apostar3y4"])){
  cargarApuesta("fecha3y4");
}

?>
