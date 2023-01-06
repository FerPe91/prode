<?php include("../configuracion/cabecera.php");?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="row d-flex justify-content-center" style="background-image: url(https://img.freepik.com/vector-premium/fondo-futbol-o-futbol-bola-grande-colores-verdes_444390-3110.jpg?w=2000);">
    <h2 class="row d-flex justify-content-center"> HOME </h2>  
    
    
    <div class="col-12 row container-fluid d-flex justify-content-center" style="height:400px">

        <div data-aos="fade-right" class="col-1 h-100 d-inline-block bg-secondary">
            <h3 class="col-2 mt-5">inicio</h3>
        </div>
        
        <div data-aos="flip-left" class="col-2 h-100 d-inline-block p-5 bg-warning">
            <h3 class="col-2">HACER MI APUESTA</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='apuestaEliminatoriaHTML.php'">Eliminatoria</button>
        </div>

        <div class="col-6 row container h-100 p-0 m-0">
            
            <div data-aos="fade-up" class="col-12 container h-50 flex-column bd-highlight bg-info">
                <h3>TABLA</h3>
            </div>

            <div data-aos="zoom-in" class="col-12 row container h-50 p-0 m-0 bg-warning">
                <div class="col-12 w-50 container h-100 bg-secondary">
                    <h3>MIS DATOS</h3>
                </div>
                <div class="col-12 w-50 container h-100 bd-highlight bg-warning">
                    <h3>SALDO</h3>
                </div>
            </div>
        </div>

        <div data-aos="zoom-in-down" class="col-2 h-100 d-inline-block bg-secondary">
            <h3 class="col-2 mt-5">SALIR</h3>
        </div>
    </div>





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>    
</body>
    
</html>