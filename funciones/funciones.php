<?php 


function cargarApuesta($tabla, $fecha, $Valor, $direccion){
    require ('../configuracion/conexion.php');
    $UsuarioI = $_SESSION["usuario"];
    
    $cantApuestas= mysqli_query($conexion, "SELECT * FROM $tabla WHERE usuario ='$UsuarioI' and fecha = '$fecha'");
    
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
  setTimeout( function() { window.location.href = $direccion; }, 2000 );
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
      setTimeout( function() { window.location.href = $direccion; }, 1500 );
      </script>';
    
      }else{
            
      $saldoNuevo = $DatosUsuario["saldo"] - $Valor;
      $actualizarSaldo = "UPDATE registro SET saldo = '$saldoNuevo' WHERE usuario = '$UsuarioI'";
      mysqli_query($conexion, $actualizarSaldo);
      
      if($tabla == "apuesta_eliminatorias"){
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
        
         $insertar = "INSERT INTO $tabla VALUES ('$UsuarioI', '$fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10', '0' )";
      
      }elseif($tabla == "apuesta_libertadores"){
        $P1 = $_POST['p1'];
        $P2 = $_POST['p2'];
        $P3 = $_POST['p3'];
        $P4 = $_POST['p4'];
        $P5 = $_POST['p5'];
        $P6 = $_POST['p6'];
        
         $insertar = "INSERT INTO $tabla VALUES ('$UsuarioI', '$fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '0' )";
      }
     
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
      setTimeout( function() { window.location.href = $direccion; }, 1500 );
      </script>';
     
      };
    };
};

    
  function saberCantApostadores($tabla, $fecha){
    require ('../configuracion/conexion.php');
    $cantApostadores= mysqli_query($conexion, "SELECT * FROM $tabla WHERE fecha ='$fecha'");
    $cantidad=mysqli_num_rows($cantApostadores);

    return $cantidad;
}

  function cargarApostadores($tabla, $fechas, $ArrayApostadores){
    require ('../configuracion/conexion.php');
    $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla WHERE fecha = '$fechas'");
    while($totalUsuario = mysqli_fetch_array($Usuarios)){
        array_push($ArrayApostadores, $totalUsuario["usuario"]);
    };
    return $ArrayApostadores;
}

function cargarPuntajesPorFecha ($tabla1,$tabla2, $fechas, $ArrayPuntajes, $ArrayApostadores){
    require ('../configuracion/conexion.php');

    if($tabla1 == "apuesta_eliminatorias"){
      for($i=0; $i<count($ArrayApostadores); $i++) {
        
        $partido1=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p1 = $tabla2.p1 and $tabla1.fecha = '$fechas'");
        $SumaPuntos = mysqli_num_rows($partido1);
        $partido2=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p2 = $tabla2.p2 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido2);
        $partido3=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p3 = $tabla2.p3 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido3);
        $partido4=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p4 = $tabla2.p4 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido4);
        $partido5=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p5 = $tabla2.p5 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido5);
        $partido6=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p6 = $tabla2.p6 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido6);
        $partido7=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p7 = $tabla2.p7 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido7);
        $partido8=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p8 = $tabla2.p8 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido8);
        $partido9=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p9 = $tabla2.p9 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido9);
        $partido10=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p10 = $tabla2.p10 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido10);
    
      array_push($ArrayPuntajes, $SumaPuntos*5);
      $actualizarPuntaje = "UPDATE $tabla1 SET puntaje = '$SumaPuntos' WHERE usuario = '$ArrayApostadores[$i]' And fecha='$fechas'";
      mysqli_query($conexion, $actualizarPuntaje);
    };

    }elseif($tabla1 == "apuesta_libertadores"){
      for($i=0; $i<count($ArrayApostadores); $i++) {
        
        $partido1=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p1 = $tabla2.p1 and $tabla1.fecha = '$fechas'");
        $SumaPuntos = mysqli_num_rows($partido1);
        $partido2=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p2 = $tabla2.p2 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido2);
        $partido3=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p3 = $tabla2.p3 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido3);
        $partido4=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p4 = $tabla2.p4 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido4);
        $partido5=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p5 = $tabla2.p5 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido5);
        $partido6=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p6 = $tabla2.p6 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido6);

        array_push($ArrayPuntajes, $SumaPuntos*5);
      $actualizarPuntaje = "UPDATE $tabla1 SET puntaje = '$SumaPuntos' WHERE usuario = '$ArrayApostadores[$i]' And fecha='$fechas'";
      mysqli_query($conexion, $actualizarPuntaje);
    };
  };
     
    return $ArrayPuntajes;
};

function cargarPuntajesTotal ($tabla, $ArrayPuntajes, $ArrayApostadores){
  require ('../configuracion/conexion.php');
  for($i=0; $i<count($ArrayApostadores); $i++) {
      
      $PuntajesTotal=mysqli_query($conexion,"SELECT SUM(puntaje) as Total FROM $tabla WHERE usuario = '$ArrayApostadores[$i]' and fecha != 'todo'");
      $Resultados = mysqli_fetch_assoc($PuntajesTotal);
      $Tt=$Resultados["Total"];
      array_push($ArrayPuntajes, $Resultados["Total"]*5);
      $actualizarPuntaje = "UPDATE $tabla SET puntaje = '$Tt'  WHERE usuario = '$ArrayApostadores[$i]' And fecha='todo'";
      mysqli_query($conexion, $actualizarPuntaje);
  };
  return $ArrayPuntajes;
};