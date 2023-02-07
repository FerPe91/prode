<?php 
include("../configuracion/cabecera.php");
require('../configuracion/conexion.php');
require ('../funciones/funciones.php');

//desde aqui cambiamos los parametros de fechas y valor de apuesta
//El tiempo para la cuenta regresiva se modifica desde el archivo cuentaRegresiva.js que esta en la carpeta JS

//////////////ELIMINATORIAS/////////////////
$NombreFechaEliminatoria = "fecha1y2";
$ValorApuestaEliminatoria = 500;
///////////////////////////////////
$PremioEliminatoria = premios ("apuesta_eliminatorias", $NombreFechaEliminatoria, $ValorApuestaEliminatoria);
$_SESSION['nombreFechaEliminatoria'] = $NombreFechaEliminatoria;
$_SESSION['valorApuestaEliminatoria'] =$ValorApuestaEliminatoria;
$_SESSION['premioEliminatoria'] = $PremioEliminatoria;

//////////////TORNEO ARGENTINO///////////////////////
$NombreFechaArgentina = "fecha5";
$ValorApuestaArgentina = 500;
///////////////////////////////
$PremioArg = premios ("apuesta_torneoarg", $NombreFechaArgentina, $ValorApuestaArgentina);
$_SESSION['nombreFechaArgentina'] = $NombreFechaArgentina;
$_SESSION['valorApuestaArgentina'] =$ValorApuestaArgentina;
$_SESSION['premioArg'] = $PremioArg;

$PremioArgTotal = premios ("apuesta_torneoarg", "todo", 2000);
$_SESSION['premioTotalArg'] = $PremioArgTotal;

////////////LIBERTADORES//////////////////////////
$ValorApuestaLibertadores = 500;
////////////////////////////////////////////
$_SESSION['valorApuestaLibertadores'] =$ValorApuestaLibertadores;
$PremioLibGA = premios ("apuesta_libertadores","GrupoA", $ValorApuestaLibertadores);
$_SESSION['premioGA'] = $PremioLibGA;

$PremioLibGB = premios ("apuesta_libertadores","GrupoB", $ValorApuestaLibertadores);
$_SESSION['premioGB'] = $PremioLibGB;

$PremioLibGC = premios ("apuesta_libertadores","GrupoC", $ValorApuestaLibertadores);
$_SESSION['premioGC'] = $PremioLibGC;

$PremioLibGD = premios ("apuesta_libertadores","GrupoD", $ValorApuestaLibertadores);
$_SESSION['premioGD'] = $PremioLibGD;

$PremioLibGE = premios ("apuesta_libertadores","GrupoE", $ValorApuestaLibertadores);
$_SESSION['premioGE'] = $PremioLibGE;

$PremioLibGF = premios ("apuesta_libertadores","GrupoF", $ValorApuestaLibertadores);
$_SESSION['premioGF'] = $PremioLibGF;

$PremioLibGG = premios ("apuesta_libertadores","GrupoG", $ValorApuestaLibertadores);
$_SESSION['premioGG'] = $PremioLibGG;

$PremioLibGH = premios ("apuesta_libertadores","GrupoH", $ValorApuestaLibertadores);
$_SESSION['premioGH'] = $PremioLibGH;


$usuarioI= $_SESSION["usuario"]; //guardo en la variable el usuario que ingreso
$consultaUsuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario = '$usuarioI'");//preparo los datos
$datosUsuario = mysqli_fetch_array($consultaUsuario);//paso los datos a un "arreglo"
$apellidoU = $datosUsuario["apellido"]; 
$nombreU = $datosUsuario["nombre"];
$dniU = $datosUsuario["dni"]; 
$telefonoU = $datosUsuario["telefono"];
$claveU = $datosUsuario["clave"]; 
$saldoU = $datosUsuario["saldo"]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <link rel="stylesheet" href="../CSS/StyleHome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style= "background-image: url('../img/fondoHome.png'); background-size: cover">  

    <div id="titulo">
	<span>H</span>
	<span>O</span>
	<span>M</span>
	<span>E</span>
    </div>
    

<div  class="col-12 row container-fluid d-flex justify-content-center" style="height:400px; width:100%; margin:10px 20px 10px 10px">

    <div class="col-1 h-10 d-inline-block bg-secondary" style="margin-right:10px" >    
        <img src="../img/info.png"   style="margin-top:170px; margin-left: 5px; width: 65px; height: 65px"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></img>       

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color: #FC1111; color:white">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" id="offcanvasScrollingLabel">Bienvenido <?php echo $nombreU ?> </h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="En HACER MI APUESTA vas a poder selecionar en cual competencia quieres jugar. Para que tu apuesta sea aceptada debes completar todos los partidos, realizarla antes del tiempo establecido y contar con el saldo suficiente. Ningun jugador puede hacer mas de un pronostico en una misma apuesta.">Empezar a jugar</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="En SALDO podras ingresar o retirar tu dinero. Para realizar la operacion debes completar el monton (minimo $500) y tu contraseña. Tanto la carga como el retiro de saldo puede demorarse hasta 24 hs.">Cargar y retirar saldo</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="El premio acumulado dependenda de la cantidad de jugadores inscriptos en cada apuesta. Quien suma mas puntos se llevara todo el premio, en caso de empate en la primer posicion se repartira en partes iguales entre todos los ganadores. Por cada partido acertado se obtienen 5 puntos.">Premios y Puntuaciones</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="En TABLAS vas a poder ver las posiciones parciales y finales de todos los jugadores. Ademas tendras la posibilidad de divertirte con el chat.">Ver resultados</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="modal" data-bs-target="#ModalPerfil">Editar Perfil</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 85px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Por cualquir duda o sugerencia no dudes en escribirnos un mail a algundiatendremosmail@gmail.com">Contacto</a>              
            </div>
        </div>
    </div>
 
<div id="eliminatorias" class="carousel slide col-3 h-100 d-inline-block p-0 bg-success ">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/eliminatorias.png "style="width: 100%; height: 400px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 120px 35px 70px 35px ">
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaEliminatoria.php'">Jugar</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesEliminatoria.php'">Resultados</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticosEliminatorias.php'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#eliminatorias" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>


<div id="libertadores" class="carousel slide col-3 h-100 d-inline-block p-0 bg-warning" style="margin: 0px 10px 0px 10px">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/libertadoress.png "style="width: 100%; height: 400px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 120px 35px 70px 35px ">
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaLibertadores.php'">Jugar</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesLibertadores.php'">Resultados</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticosLibertadores.php'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#libertadores" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>

<div id="argentina" class="carousel slide col-3 h-100 d-inline-block p-0 bg-danger ">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/ligaArge.png "style="width: 100%; height: 400px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 120px 35px 70px 35px ">
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaTorneoArg.php'">Jugar</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesTorneoArg.php'">Resultados</button>
                <button type="button" class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticoTorneoArg'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#argentina" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>

 
    <div class="col-1 h-10 d-inline-block bg-secondary" style="margin-left:10px" >
    <img src="../img/dinero.png"   type="button" style="margin-top:160px; margin-left: 5px; width: 70px; height: 70px" data-bs-toggle="modal" data-bs-target="#exampleModal"></img> 
    </div>
</div>        
   


     
    
    <!-- Modal Perfil -->
        <div class="modal fade" id="ModalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">EDITAR PERFIL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
    

<!-- Modal Saldo -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TU SALDO ES $ <?php echo $saldoU ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>    
</body>
    
</html>

<?php 
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>

<script>
var popoverTriggerList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})</script>    