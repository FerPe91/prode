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
$NombreFechaArgentina = "fecha1";
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


$time = time();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
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
    

    <!-- <div class=" container-fluid d-flex justify-content-between pb-1 mx-1 rounded-bottom-1 text-warning ">
            <h6><?php echo date("d-m-Y");?></h6>
            <h6><?php echo date(("H:i"));?></h6>
    </div> -->
    
    <div class="col-12 row container-fluid d-flex justify-content-center" style="height:400px; margin-top:20px">

        <div data-aos="fade-right" class="col-1 h-100 d-inline-block bg-secondary" >    
        <img src="../img/atras.png"   style="margin-top:160px; margin-left: 5px"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></img>

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
 
        <div data-aos="flip-left" class="col-2 h-100 d-inline-block p-4 bg-warning" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
            <h3 class="col-12">HACER MI APUESTA ▼</h3>
            
            <div >
                <div class="collapse bg-transparent" id="collapseExample">
                    <div class="card card-body p-0 mt-1 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href='apuestaEliminatoria.php'" >Eliminatorias</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href='apuestaLibertadores.php'">Copa Libertadores</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href='apuestaTorneoArg.php'">Liga Argentina</button>
                    </div>
                </div>
            </div>

            
        </div>


        <div class="col-6 row container h-100 p-0 m-0">
            <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                <div class="misDatos col-12 w-50 container h-100 bg-secondary">
                    <h3>MIS APUESTAS</h3>
                </div>

                
                    <!-- Button trigger modal -->
                <div type="button" class="col-6 row container h-100 p-0 m-0 bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <h3 style="color:black">SALDO</h3>
                    <img src="../img/bolsaSaldo.png" style="height: 130px; width:130px; margin-left: 85px"></img>
                </div>
            </div>
            
            <div type= "button" data-aos="fade-up" class="tabla col-12 container h-50 flex-column bd-highlight bg-info" data-bs-toggle="collapse" href="#desplega" role="button" aria-expanded="false" aria-controls="desplega">
                <h3>TABLAS ▼</h3>

                <div >
                <div class="collapse bg-transparent" id="desplega">
                <div class="row align-items-center">
                    <div class="col-4" >
                    <div class="card bg-transparent" style="width: 12rem;">
                        <img src="../img/eliminatoriass.png" class="card-img-top" type="button" onclick="location.href='posicionesEliminatoria.php'">   
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="card bg-transparent" style="width: 12rem;">
                        <img src="../img/libertadores.png" class="card-img-top" type="button" onclick="location.href='posicionesLibertadores.php'">   
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="card bg-transparent" style="width: 12rem;">
                        <img src="../img/ligaArg.png" class="card-img-top" type="button" onclick="location.href='posicionesTorneoArg.php'">   
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>

        <div data-aos="zoom-in-down" class="salir col-2 h-100 p-0 m-0 border-0 d-inline-block bg-secondary">
            <div class="col-12 h-100 rounded-0 card p-0 m-0 border-0" style=";">
                
                <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                        <div class="col-12 row container h-100 p-0 m-0">
                        
                        <div class="h-50 w-100 px-0">
                            <img src="https://media.ambito.com/p/b68ff1d6b8d86465c6f6edcdf9764a45/adjuntos/239/imagenes/040/126/0040126022/alexis-mac-allister.jpg" class="card-img-top h-100" alt="...">  
                        </div>
                    
                        <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                            <div class="col-12 w-100 container h-100 bg-warning">
                                <div class="card-body h-100 p-2">
                                    <h5 class="card-title text-dark">Imparable:</h5>
                                    <p class="card-text text-dark">2 goles de Alexis Mac Allister en la victoria 4-1 del brighton vs Middlesbrough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="carousel-item h-100 p-0">
                            <div class="col-12 row container h-100 p-0 m-0">
                        
                                <div class="h-50 w-100 px-0">
                                    <img src="https://www.ole.com.ar/images/2022/01/24/1hWuMP5P6_340x340__1.jpg" class="card-img-top h-100 w-100" alt="...">  
                                </div>
                            
                                <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                                    <div class="col-12 w-100 container h-100 bg-warning">
                                        <div class="card-body h-100 p-2">
                                            <h6 class="card-title text-dark">BOCA: Se lesiono Fígal.</h6>
                                            <p class="card-text text-dark">El defensor de Boca sufrió una lesion muscular que lo marginará un tiempo de las canchas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-100 p-0">
                            <div class="col-12 row container h-100 p-0 m-0">
                        
                                <div class="h-50 w-100 px-0">
                                    <img src="https://www.ole.com.ar/images/2021/10/11/ozHOZ8wlz_720x0__2.jpg" class="card-img-top h-100 w-100" alt="...">  
                                </div>
                            
                                <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                                    <div class="col-12 w-100 container h-100 bg-warning">
                                        <div class="card-body h-100 p-2">
                                            <h5 class="card-title text-dark">River: Llega Enzo Diaz?</h5>
                                            <p class="card-text text-dark">El lateral de la "T" tiene muchas chances de ser parte del plantel de Demichellis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
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