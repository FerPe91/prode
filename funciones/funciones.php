<?php 


function cargarApuesta($fecha, $Valor){
    require ('../configuracion/conexion.php');
    
    $UsuarioI = $_SESSION["usuario"];
    
    $cantApuestas= mysqli_query($conexion, "SELECT * FROM apuesta_eliminatorias WHERE usuario ='$UsuarioI' and fecha = '$fecha'");
    
    if(mysqli_num_rows($cantApuestas)>0){
        echo '
   <script type="text/javascript">
      $(document).ready(function(){ 
   Swal.fire({
    position: "center",
    icon: "error",
    title: "Usted ya realizo esta apuesta",
    showConfirmButton: false,
    timer: 2000
  });
});
setTimeout( function() { window.location.href = "apuestaEliminatoria.php"; }, 2000 );
        </script>';
 

    }else{
    $Consulta = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$UsuarioI'");
    $DatosUsuario = mysqli_fetch_array($Consulta); //en la variable $DatosUsuario guardo toda la consulta, cuando lo imprima pondre entre corchetes que campo quiero mostrar
     
      if($DatosUsuario["saldo"]<$Valor){
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
      setTimeout( function() { window.location.href = "apuestaEliminatoria.php"; }, 1500 );
      </script>';
    
      }else{
            
      $saldoNuevo = $DatosUsuario["saldo"] - $Valor;
      $actualizarSaldo = "UPDATE registro SET saldo = '$saldoNuevo' WHERE usuario = '$UsuarioI'";
      mysqli_query($conexion, $actualizarSaldo);
            
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
        mysqli_query($conexion, $insertar); //si el saldo es suficiente carga la apuesta
        
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
      setTimeout( function() { window.location.href = "apuestaEliminatoria.php"; }, 1500 );
      </script>';
     
      };
    };
};

    
  function saberCantApostadores($fecha){
    require ('../configuracion/conexion.php');
    $cantApostadores= mysqli_query($conexion, "SELECT * FROM apuesta_eliminatorias WHERE fecha ='$fecha'");
    $cantidad=mysqli_num_rows($cantApostadores);

    return $cantidad;
}

  function cargarApostadores($fechas, $Apostadores){
    require ('../configuracion/conexion.php');
    $Usuarios = mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias WHERE fecha = '$fechas'");
    while($totalUsuario = mysqli_fetch_array($Usuarios)){
        array_push($Apostadores, $totalUsuario["usuario"]);
    };
    return $Apostadores;
}

function cargarPuntajes ($fechas, $Puntajes, $Apostadores){
    require ('../configuracion/conexion.php');
    for($i=0; $i<count($Apostadores); $i++) {
        
        $partido1=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p1 = resultado_eliminatorias.p1 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos = mysqli_num_rows($partido1);
        $partido2=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p2 = resultado_eliminatorias.p2 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido2);
        $partido3=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p3 = resultado_eliminatorias.p3 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido3);
        $partido4=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p4 = resultado_eliminatorias.p4 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido4);
        $partido5=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p5 = resultado_eliminatorias.p5 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido5);
        $partido6=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p6 = resultado_eliminatorias.p6 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido6);
        $partido7=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p7 = resultado_eliminatorias.p7 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido7);
        $partido8=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p8 = resultado_eliminatorias.p8 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido8);
        $partido9=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p9 = resultado_eliminatorias.p9 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido9);
        $partido10=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p10 = resultado_eliminatorias.p10 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido10);
    
        array_push($Puntajes, $SumaPuntos*5);
    };
    return $Puntajes;
};