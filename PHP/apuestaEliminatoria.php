
<?php

require ('../configuracion/conexion.php');

if (isset($_POST["apostar1y2"])){

session_start();
$UsuarioI = $_SESSION["usuario"];

$Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
$SaldoUsuario = mysqli_fetch_array($Consulta); //en la variable $SaldoUsuario guardo toda la consulta, cuando lo imprima pondre entre corchetes que campo quiero mostrar



$Fecha = $_POST['fecha1y2'];
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

$insertar = "INSERT INTO apuesta_eliminatorias VALUES ('$UsuarioI', '$Fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10' )";


if($SaldoUsuario["saldo"]<500){
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
$saldoNuevo = $SaldoUsuario["saldo"] - 500;
 mysqli_query($conexion, $insertar);

$actualizarSaldo = "UPDATE registro SET saldo = '$saldoNuevo' WHERE usuario = '$UsuarioI'";
 mysqli_query($conexion, $actualizarSaldo);
 $_SESSION['nombre'] = "HOME";
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

if (isset($_POST["apostar3y4"])){

  session_start();
  $UsuarioI = $_SESSION["usuario"];
  
  $Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
  $SaldoUsuario = mysqli_fetch_array($Consulta); //en la variable $SaldoUsuario guardo toda la consulta, cuando lo imprima pondre entre corchetes que campo quiero mostrar
  
  
  
  $Fecha = $_POST['fecha3y4'];
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
  
  $insertar = "INSERT INTO apuesta_eliminatorias VALUES ('$UsuarioI', '$Fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10' )";
  
  
  if($SaldoUsuario["saldo"]<500){
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
  $saldoNuevo = $SaldoUsuario["saldo"] - 500;
   mysqli_query($conexion, $insertar);
  
  $actualizarSaldo = "UPDATE registro SET saldo = '$saldoNuevo' WHERE usuario = '$UsuarioI'";
   mysqli_query($conexion, $actualizarSaldo);
   $_SESSION['nombre'] = "HOME";
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
?>

