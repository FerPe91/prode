<?php include("../configuracion/cabecera.php");?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="row d-flex justify-content-center";">
    <h2 class="row d-flex justify-content-center"> HOME </h2>  
    
    
    <div class="col-12 row container-fluid d-flex justify-content-center" style="height:400px">

        <div data-aos="fade-right" class="home col-1 h-100 d-inline-block bg-secondary">
            <h3 class="col-2 mt-5">inicio</h3>
        </div>
        
        <div data-aos="flip-left" class="col-2 h-100 d-inline-block p-4 bg-warning">
            <h3 class="col-12">HACER MI APUESTA</h3>
            <div class="border-bottom border-secondary mb-2"></div>
            <div class="border border-primary rounded-0 p-0 m-0">
                <a class="col-12 d-inline-block p-0 btn btn-light rounded-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Pronósticos
                    <p class="dropdown-toggle p-0 m-0"></p>
                </a>
                <div class="collapse bg-transparent" id="collapseExample">
                    <div class="card card-body p-0 mt-1 mb-1 bg-transparent">
                        <button type="button" class="btn btn-primary bg-transparent text-dark" onclick="location.href='apuestaEliminatoriaHTML.php'">Eliminatorias</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-primary bg-transparent text-dark" onclick="location.href=''">Copa America</button>
                    </div>
                    <div class="card card-body p-0 mb-1 bg-transparent">
                        <button type="button" class="btn btn-primary bg-transparent text-dark" onclick="location.href=''">Champions League</button>
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
                <div class="saldo col-12 w-50 container h-100 bd-highlight bg-light">
                    <h3>SALDO</h3>
                </div>
            </div>
        </div>

        <div data-aos="zoom-in-down" class="salir col-2 h-100 d-inline-block bg-secondary">
            <h3 class="col-2 mt-5">SALIR</h3>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>    
</body>
    
</html>