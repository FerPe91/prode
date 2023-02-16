<?php 

function registrarUsuario(){
 require ('../../configuracion/conexion.php');
  $Apellido = $_POST['apellido'];
  $Nombre = $_POST['nombre'];
  $Dni = $_POST['dni'];
  $Telefono = $_POST['telefono'];
  $Usuario = $_POST['usuario'];
  $Contraseña = $_POST['contraseña'];
  $Rcontraseña = $_POST['Rcontraseña'];
  $PreguntaSeg = $_POST['PreguntaSeg'];

  $insertar = "INSERT INTO registro VALUES ('$Apellido', '$Nombre', '$Dni', '$Telefono', '$Usuario', '$Contraseña','$PreguntaSeg', '0' )";

  $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario ='$Usuario'");
  if (mysqli_num_rows($verificar_usuario) > 0){ //verifica que la cantidad de usuario con ese numero no sea mayor a 0
      
    echo '
    <script type="text/javascript">
        $(document).ready(function(){ 
    Swal.fire({
      position: "center",
      icon: "error",
      title: "El usuario ya existe",
      showConfirmButton: false,
      timer: 1500
    });
  });
  function reload(){
    window.location=document.location.href;
  }

          </script>';
  
  exit;
            
  }

  $verificar_dni = mysqli_query($conexion, "SELECT * FROM registro WHERE dni ='$Dni'");
  if (mysqli_num_rows($verificar_dni) > 0){
      
    echo '
    <script type="text/javascript">
        $(document).ready(function(){ 
    Swal.fire({
      position: "center",
      icon: "error",
      title: "Ya existe un usuario con ese dni",
      showConfirmButton: false,
      timer: 1500
    });
  });
  function reload(){
    window.location=document.location.href;
  }
          </script>';
  exit; //exit hace que corte  no ingrese los valores a la tabla
  }

  elseif ($Contraseña!=$Rcontraseña){

    echo '
    <script type="text/javascript">
        $(document).ready(function(){ 
    Swal.fire({
      position: "center",
      icon: "error",
      title: "Las claves no coinciden",
      showConfirmButton: false,
      timer: 1500
    });
  });
  function reload(){
    window.location=document.location.href;
  }
  </script>';  
  exit;
  }
  
  //si pasa todas las verificaciones ingresamos los datos

  else{mysqli_query($conexion, $insertar);
  echo '
  <script type="text/javascript">
    $(document).ready(function(){ 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Usuario registrado",
  showConfirmButton: false,
  timer: 1500
  });
  });
  setTimeout( function() { window.location.href = "../../index.php"; }, 1500 );
      </script>';
    }
};

function recuperarUsuario(){
  require ('../../configuracion/conexion.php');
  $dni=$_POST["dni"];
  $fecha=$_POST["fechaN"];
  $claveNueva=$_POST["clave"];
  $consulta=mysqli_query($conexion, "SELECT * FROM registro WHERE dni ='$dni'");
  $datoFecha=mysqli_fetch_array($consulta);
 
  if (mysqli_num_rows($consulta) == 0){ //verifica que la cantidad de usuario con ese numero no sea mayor a 0
    echo '
    <script type="text/javascript">
      $(document).ready(function(){ 
    Swal.fire({
      position: "center",
      icon: "error",
      title: "El DNI no se encuentra registrado",
      showConfirmButton: false,
      timer: 1500
      });
    });
    function reload(){
      window.location=document.location.href;
    }
    </script>';

  }elseif($datoFecha["pregunta_seg"] != $fecha){
    
      echo'
      <script type="text/javascript">
        $(document).ready(function(){ 
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Fecha incorrecta. No coincide.",
        showConfirmButton: false,
        timer: 1500
        });
      });
      function reload(){
        window.location=document.location.href;
      }</script>';
    }else{
      $editar="UPDATE registro SET clave='$claveNueva' where dni = '$dni'";
      mysqli_query($conexion, $editar);
      echo'
      <script type="text/javascript">
        $(document).ready(function(){ 
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Tu cambio fue realizado con exito",
        showConfirmButton: false,
      
        });
      });
      setTimeout( function() { window.location.href = "../../index.php"; }, 2500 );
     </script>';
    }
   
 }




 function cargarApuesta($tabla, $fecha, $Valor){
    require ('../../configuracion/conexion.php');
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
    timer: 2000 });
  });
    function reload(){
  window.location=document.location.href;}

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
        timer: 1500 });
      });
      function reload(){
        window.location=document.location.href;}
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
        $P7 = $_POST['p7'];
        $P8 = $_POST['p8'];
        $P9 = $_POST['p9'];
        $P10 = $_POST['p10'];
        $P11 = $_POST['p11'];
        $P12 = $_POST['p12'];
        
        $insertar = "INSERT INTO $tabla VALUES ('$UsuarioI', '$fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10', '$P11', '$P12', '0' )";
      
      }elseif($tabla == "apuesta_torneoarg"){
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
        $P11 = $_POST['p11'];
        $P12 = $_POST['p12'];
        $P13 = $_POST['p13'];
        $P14 = $_POST['p14'];
        
        $insertar = "INSERT INTO $tabla VALUES ('$UsuarioI', '$fecha', '$P1', '$P2', '$P3', '$P4', '$P5', '$P6', '$P7', '$P8', '$P9', '$P10', '$P11', '$P12', '$P13', '$P14', '0' )";
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
        timer: 1500 });
      });

      function reload(){
        window.location=document.location.href;}
        setTimeout(reload,1500);
      </script>';
     
      };
    };
};

    
  function saberCantApostadores($tabla, $fecha){
   require ('../../configuracion/conexion.php');
    $cantApostadores= mysqli_query($conexion, "SELECT * FROM $tabla WHERE fecha ='$fecha'");
    $cantidad=mysqli_num_rows($cantApostadores);

    return $cantidad;
}

  function cargarApostadores($tabla, $fechas, $ArrayApostadores){
   require ('../../configuracion/conexion.php');
    $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla WHERE fecha = '$fechas'");
    while($totalUsuario = mysqli_fetch_array($Usuarios)){
        array_push($ArrayApostadores, $totalUsuario["usuario"]);
    };
    return $ArrayApostadores;
}

function cargarPuntajesPorFecha ($tabla1,$tabla2, $fechas, $ArrayPuntajes, $ArrayApostadores){
   require ('../../configuracion/conexion.php');

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
        $partido7=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p7 = $tabla2.p7 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido7);
        $partido8=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p8 = $tabla2.p8 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido8);
        $partido9=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p9 = $tabla2.p9 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido9);
        $partido10=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p10 = $tabla2.p10 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido10);
        $partido11=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p11 = $tabla2.p11 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido11);
        $partido12=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p12 = $tabla2.p12 and $tabla1.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido12);


        array_push($ArrayPuntajes, $SumaPuntos*5);
      $actualizarPuntaje = "UPDATE $tabla1 SET puntaje = '$SumaPuntos' WHERE usuario = '$ArrayApostadores[$i]' And fecha='$fechas'";
      mysqli_query($conexion, $actualizarPuntaje);
    };

  }elseif($tabla1 == "apuesta_torneoarg"){
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
      $partido11=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p11 = $tabla2.p11 and $tabla1.fecha = '$fechas'");
      $SumaPuntos += mysqli_num_rows($partido11);
      $partido12=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p12 = $tabla2.p12 and $tabla1.fecha = '$fechas'");
      $SumaPuntos += mysqli_num_rows($partido12);
      $partido13=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p13 = $tabla2.p13 and $tabla1.fecha = '$fechas'");
      $SumaPuntos += mysqli_num_rows($partido13);
      $partido14=mysqli_query($conexion,"SELECT * FROM $tabla1 inner join $tabla2 on $tabla1.fecha = $tabla2.fecha where $tabla1.usuario = '$ArrayApostadores[$i]' and $tabla1.p14 = $tabla2.p14 and $tabla1.fecha = '$fechas'");
      $SumaPuntos += mysqli_num_rows($partido14);


      array_push($ArrayPuntajes, $SumaPuntos*5);
    $actualizarPuntaje = "UPDATE $tabla1 SET puntaje = '$SumaPuntos' WHERE usuario = '$ArrayApostadores[$i]' And fecha='$fechas'";
    mysqli_query($conexion, $actualizarPuntaje);
  };
  };
   
     
    return $ArrayPuntajes;
};

function cargarPuntajesTotal ($tabla, $ArrayPuntajes, $ArrayApostadores){
 require ('../../configuracion/conexion.php');
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



function premios ($tabla, $fecha, $valorApuesta){
  $CantidadApostadores=saberCantApostadores($tabla,$fecha);
  return $CantidadApostadores*$valorApuesta*70/100;
}

/////////////////CHAT/////////////////////
function enviarMensaje ($tabla, $id){
 require ('../../configuracion/conexion.php');
  $UsuarioI = $_SESSION["usuario"];
  $EnviarMensaje = $_POST[$id];
  date_default_timezone_set('America/Buenos_Aires');
  $fechaActual=date("d/m  H:i");
  $insertar = "INSERT INTO $tabla VALUES ('$UsuarioI', '$EnviarMensaje', '$fechaActual')";
  mysqli_query($conexion, $insertar);
  echo '
  <script type="text/javascript"> 
    function reload(){
        window.location=document.location.href;
    }
    setTimeout(reload,1);
  </script>';
}

function UsuarioMensaje($tabla, $ArrayUsuarioMensaje){
 require ('../../configuracion/conexion.php');
  $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla");
  while($totalUsuario = mysqli_fetch_array($Usuarios)){
      array_push($ArrayUsuarioMensaje, $totalUsuario["usuario"]);
  };
  return $ArrayUsuarioMensaje;
}

function Mensaje($tabla, $ArrayMensaje){
 require ('../../configuracion/conexion.php');
  $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla");
  while($totalUsuario = mysqli_fetch_array($Usuarios)){
      array_push($ArrayMensaje, $totalUsuario["mensaje"]);
  };
  return $ArrayMensaje;
}

function FechaMensaje($tabla, $ArrayFechaMensaje){
 require ('../../configuracion/conexion.php');
  $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla");
  while($totalUsuario = mysqli_fetch_array($Usuarios)){
      array_push($ArrayFechaMensaje, $totalUsuario["fecha"]);
  };
  return $ArrayFechaMensaje;
}
////////////////////////////////////////////////


function mostrarMisPronosticos($tabla, $fecha, $Array){
 require ('../../configuracion/conexion.php');
  $UsuarioI = $_SESSION["usuario"];
  $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla WHERE usuario ='$UsuarioI' and fecha = '$fecha'");
  $totalUsuario = mysqli_fetch_array($Usuarios);

  if($tabla == "apuesta_eliminatorias"){
    if(mysqli_num_rows($Usuarios)==0){
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
    }else{
      array_push($Array, $totalUsuario["p1"]);
      array_push($Array, $totalUsuario["p2"]);
      array_push($Array, $totalUsuario["p3"]);
      array_push($Array, $totalUsuario["p4"]);
      array_push($Array, $totalUsuario["p5"]);
      array_push($Array, $totalUsuario["p6"]);
      array_push($Array, $totalUsuario["p7"]);
      array_push($Array, $totalUsuario["p8"]);
      array_push($Array, $totalUsuario["p9"]);
      array_push($Array, $totalUsuario["p10"]);
      array_push($Array, $totalUsuario["puntaje"]*5);}

    }elseif($tabla == "apuesta_libertadores"){
    if(mysqli_num_rows($Usuarios)==0){
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
      array_push($Array, "-");
    }else{
      array_push($Array, $totalUsuario["p1"]);
      array_push($Array, $totalUsuario["p2"]);
      array_push($Array, $totalUsuario["p3"]);
      array_push($Array, $totalUsuario["p4"]);
      array_push($Array, $totalUsuario["p5"]);
      array_push($Array, $totalUsuario["p6"]);
      array_push($Array, $totalUsuario["p7"]);
      array_push($Array, $totalUsuario["p8"]);
      array_push($Array, $totalUsuario["p9"]);
      array_push($Array, $totalUsuario["p10"]);
      array_push($Array, $totalUsuario["p11"]);
      array_push($Array, $totalUsuario["p12"]);
      array_push($Array, $totalUsuario["puntaje"]*5);}

    }elseif($tabla == "apuesta_torneoarg"){
      if(mysqli_num_rows($Usuarios)==0){
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
        array_push($Array, "-");
      }else{
        array_push($Array, $totalUsuario["p1"]);
        array_push($Array, $totalUsuario["p2"]);
        array_push($Array, $totalUsuario["p3"]);
        array_push($Array, $totalUsuario["p4"]);
        array_push($Array, $totalUsuario["p5"]);
        array_push($Array, $totalUsuario["p6"]);
        array_push($Array, $totalUsuario["p7"]);
        array_push($Array, $totalUsuario["p8"]);
        array_push($Array, $totalUsuario["p9"]);
        array_push($Array, $totalUsuario["p10"]);
        array_push($Array, $totalUsuario["p11"]);
        array_push($Array, $totalUsuario["p12"]);
        array_push($Array, $totalUsuario["p13"]);
        array_push($Array, $totalUsuario["p14"]);
        array_push($Array, $totalUsuario["puntaje"]*5);}
    }

  return $Array;
}

function mostrarResultados($tabla, $fecha, $Array){
 require ('../../configuracion/conexion.php');
  $Usuarios = mysqli_query($conexion,"SELECT * FROM $tabla WHERE fecha = '$fecha'");
  $totalUsuario = mysqli_fetch_array($Usuarios);

  if($tabla == "resultado_eliminatorias"){
      array_push($Array, $totalUsuario["p1"]);
      array_push($Array, $totalUsuario["p2"]);
      array_push($Array, $totalUsuario["p3"]);
      array_push($Array, $totalUsuario["p4"]);
      array_push($Array, $totalUsuario["p5"]);
      array_push($Array, $totalUsuario["p6"]);
      array_push($Array, $totalUsuario["p7"]);
      array_push($Array, $totalUsuario["p8"]);
      array_push($Array, $totalUsuario["p9"]);
      array_push($Array, $totalUsuario["p10"]);
      
    

  }elseif($tabla == "resultados_libertadores"){
        array_push($Array, $totalUsuario["p1"]);
        array_push($Array, $totalUsuario["p2"]);
        array_push($Array, $totalUsuario["p3"]);
        array_push($Array, $totalUsuario["p4"]);
        array_push($Array, $totalUsuario["p5"]);
        array_push($Array, $totalUsuario["p6"]);
        array_push($Array, $totalUsuario["p7"]);
        array_push($Array, $totalUsuario["p8"]);
        array_push($Array, $totalUsuario["p9"]);
        array_push($Array, $totalUsuario["p10"]);
        array_push($Array, $totalUsuario["p11"]);
        array_push($Array, $totalUsuario["p12"]);
      

  }elseif($tabla == "resultados_torneoarg"){
        array_push($Array, $totalUsuario["p1"]);
        array_push($Array, $totalUsuario["p2"]);
        array_push($Array, $totalUsuario["p3"]);
        array_push($Array, $totalUsuario["p4"]);
        array_push($Array, $totalUsuario["p5"]);
        array_push($Array, $totalUsuario["p6"]);
        array_push($Array, $totalUsuario["p7"]);
        array_push($Array, $totalUsuario["p8"]);
        array_push($Array, $totalUsuario["p9"]);
        array_push($Array, $totalUsuario["p10"]);
        array_push($Array, $totalUsuario["p11"]);
        array_push($Array, $totalUsuario["p12"]);
        array_push($Array, $totalUsuario["p13"]);
        array_push($Array, $totalUsuario["p14"]);
  }

  return $Array;  
}
?>