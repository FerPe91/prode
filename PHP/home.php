<?php include("../configuracion/cabecera.php");?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    
    
    <div class="col-12 row container-fluid d-flex justify-content-center" style="height:400px; margin-top:20px">

        <div data-aos="fade-right" class="home col-1 h-100 d-inline-block bg-secondary">
            <h3 class="col-2 mt-5">inicio</h3>
        </div>
        
        <div data-aos="flip-left" class="col-2 h-100 d-inline-block p-4 bg-warning" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
            <h3 class="col-12">HACER MI APUESTA ▼</h3>
          
            <div >
                <div class="collapse bg-transparent" id="collapseExample">
                    <div class="card card-body p-0 mt-1 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href='apuestaEliminatoriaHTML.php' " onclick= "<?php $_SESSION['nombre'] = "ELIMINATORIAS"?> ">Eliminatorias</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href=''">Copa America</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-outline-dark"  onclick="location.href=''">Champions League</button>
                    </div>
                </div>

            </div>

            
        </div>


        <div class="col-6 row container h-100 p-0 m-0">
            
            <div data-aos="fade-up" class="tabla col-12 container h-50 flex-column bd-highlight bg-info">
                <h3>TABLA</h3>
            </div>

            <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                <div class="misDatos col-12 w-50 container h-100 bg-secondary">
                    <h3>MIS DATOS</h3>
                </div>
                    <!-- Button trigger modal -->
                <div type="button" class="saldo col-12 w-50 container h-100 bd-highlight bg-light border-0 rounded-0 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <h3>SALDO</h3>
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
                        <h5 class="modal-title" id="exampleModalLabel">CARGAR SALDO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="saldo" class="form-label">CANTIDAD</label>
                                <input type="number" class="form-control" id="saldo" aria-describedby="emailHelp" placeholder="ej: 500">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">INGRESA TU CLAVE</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
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

 