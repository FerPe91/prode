<?php 
include("../configuracion/cabecera.php");
require('../configuracion/conexion.php');
require ('../funciones/funciones.php');

$usuarioI= $_SESSION["usuario"]; //guardo en la variable el usuario que ingreso
$consultaUsuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario = '$usuarioI'");//preparo los datos
$datosUsuario = mysqli_fetch_array($consultaUsuario);//paso los datos a un "arreglo"
$saldoU = $datosUsuario["saldo"]; //del arreglo utilizo el campo saldo
$nombreU = $datosUsuario["nombre"];

$time = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <link rel="stylesheet" href="../CSS/styleHome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


    <div class="col-3 container-fluid">
        <div class=" container-fluid d-flex justify-content-between pb-1 mx-1 rounded-bottom-1 text-warning bg-primary ">
            <h6>Hoy: <?php echo date("d-m-Y");?></h6>
            <h6>Hora: <?php echo date(("H:i"));?></h6>
        </div>
    </div>
    
    <div class="col-12 row container-fluid d-flex justify-content-center" style="height:400px; margin-top:20px">

        <div data-aos="fade-right" class="col-1 h-100 d-inline-block bg-secondary" >    
        <img src="../img/atras.png"   style="margin-top:160px; margin-left: 5px"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></img>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Bienvenido <?php echo $nombreU ?> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Como realizar una apuesta:</p><br>
                <p>Como cargar y retirar saldo:</p><br>
                <p>Como ver los resultados:</p><br>
                <p>Contacto:</p><br>
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
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href=''">Liga Argentina</button>
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
                <h3>TABLAS</h3>

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
                        <img src="../img/ligaArg.png" class="card-img-top" type="button" onclick="location.href='posicionesEliminatoria.php'">   
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

    <!-- Modal -->
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
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>
