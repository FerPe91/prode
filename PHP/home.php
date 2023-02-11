<?php 
include("../configuracion/cabecera.php");
include("menuDesplegable.php");
require('../configuracion/conexion.php');
require ('../funciones/funciones.php');

//desde aqui cambiamos los parametros de fechas y valor de apuesta
//El tiempo para la cuenta regresiva se modifica desde el archivo cuentaRegresiva.js que esta en la carpeta JS 

//////////////TORNEO ARGENTINO - MODIFICAR CADA FECHA ///////////////////////
    $NombreFechaArgentina = "fecha5";
    $ValorApuestaArgentina = 500;
    $Equipo1TA = "Central Cba";
    $Equipo2TA = "Argentinos";
    $Equipo3TA = "Belgrano";
    $Equipo4TA = "Tigre";
    $Equipo5TA = "River"; 
    $Equipo6TA = "Arsenal";
    $Equipo7TA = "Racing";
    $Equipo8TA = "Lanus";
    $Equipo9TA = "Rosario Cen";
    $Equipo10TA = "Godoy Cruz";
    $Equipo11TA = "Estudiantes";
    $Equipo12TA = "Sarmiento";
    $Equipo13TA = "San Lorenzo";
    $Equipo14TA = "Union";
    $Equipo15TA = "Colon";
    $Equipo16TA = "Huracan";
    $Equipo17TA = "Barraca Cen";
    $Equipo18TA = "Gimnasia";
    $Equipo19TA = "Instituto";
    $Equipo20TA = "Newells";
    $Equipo21TA = "Banfield";
    $Equipo22TA = "Independiente";
    $Equipo23TA = "Def y Just";
    $Equipo24TA = "Atl Tucuman";
    $Equipo25TA = "Velez";
    $Equipo26TA = "Boca";
    $Equipo27TA = "Platence";
    $Equipo28TA = "Talleres";

    $Apostadores5= [];
    $Puntajes5 = [];
    $PronosticoFecha5= [];
    $ResultadosFecha5= [];
    $Apostadores5=cargarApostadores("apuesta_torneoarg", "fecha5", $Apostadores5);
    $Puntajes5=cargarPuntajesPorFecha("apuesta_torneoarg", "resultados_torneoarg", "fecha5", $Puntajes5, $Apostadores5);
    $PronosticoFecha5 = mostrarMisPronosticos("apuesta_torneoarg", "fecha5", $PronosticoFecha5);
    $ResultadosFecha5 = mostrarResultados("resultados_torneoarg", "fecha5", $ResultadosFecha5);
    $_SESSION['Apos5TA'] = $Apostadores5;
    $_SESSION['Pun5TA'] = $Puntajes5;
    $_SESSION['Pronostico5TA'] = $PronosticoFecha5;
    $_SESSION['Resultados5TA'] = $ResultadosFecha5;

    /* $Apostadores6= [];
    $Puntajes6 = [];
    $PronosticoFecha6= [];
    $ResultadosFecha6= [];
    $Apostadores6=cargarApostadores("apuesta_torneoarg", "fecha6", $Apostadores6);
    $Puntajes6=cargarPuntajesPorFecha("apuesta_torneoarg", "resultados_torneoarg", "fecha6", $Puntajes6, $Apostadores6);
    $PronosticoFecha6 = mostrarMisPronosticos("apuesta_torneoarg", "fecha6", $PronosticoFecha6);
    $ResultadosFecha6 = mostrarResultados("resultados_torneoarg", "fecha6", $ResultadosFecha6);
    $_SESSION['Apos6TA'] = $Apostadores6;
    $_SESSION['Pun6TA'] = $Puntajes6;
    $_SESSION['Pronostico6TA'] = $PronosticoFecha6;
    $_SESSION['Resultados6TA'] = $ResultadosFecha6;

    $Apostadores7= [];
    $Puntajes7 = [];
    $PronosticoFecha7= [];
    $ResultadosFecha7= [];
    $Apostadores7=cargarApostadores("apuesta_torneoarg", "fecha7", $Apostadores7);
    $Puntajes7=cargarPuntajesPorFecha("apuesta_torneoarg", "resultados_torneoarg", "fecha7", $Puntajes7, $Apostadores7);
    $PronosticoFecha7 = mostrarMisPronosticos("apuesta_torneoarg", "fecha7", $PronosticoFecha7);
    $ResultadosFecha7 = mostrarResultados("resultados_torneoarg", "fecha7", $ResultadosFecha7);
    $_SESSION['Apos7TA'] = $Apostadores7;
    $_SESSION['Pun7TA'] = $Puntajes7;
    $_SESSION['Pronostico7TA'] = $PronosticoFecha7;
    $_SESSION['Resultados7TA'] = $ResultadosFecha7;

    $Apostadores8= [];
    $Puntajes8 = [];
    $PronosticoFecha8= [];
    $ResultadosFecha8= [];
    $Apostadores8=cargarApostadores("apuesta_torneoarg", "fecha8", $Apostadores8);
    $Puntajes8=cargarPuntajesPorFecha("apuesta_torneoarg", "resultados_torneoarg", "fecha8", $Puntajes8, $Apostadores8);
    $PronosticoFecha8 = mostrarMisPronosticos("apuesta_torneoarg", "fecha8", $PronosticoFecha8);
    $ResultadosFecha8 = mostrarResultados("resultados_torneoarg", "fecha8", $ResultadosFecha8);
    $_SESSION['Apos8TA'] = $Apostadores8;
    $_SESSION['Pun8TA'] = $Puntajes8;
    $_SESSION['Pronostico8TA'] = $PronosticoFecha8;
    $_SESSION['Resultados8TA'] = $ResultadosFecha8; */


//////////TORNEO ARGENTINO - NO TOCAR ////////////////////////

    $PremioArg = premios ("apuesta_torneoarg", $NombreFechaArgentina, $ValorApuestaArgentina);
    $_SESSION['nombreFechaArgentina'] = $NombreFechaArgentina;
    $_SESSION['valorApuestaArgentina'] =$ValorApuestaArgentina;
    $_SESSION['premioArg'] = $PremioArg;
    $PremioArgTotal = premios ("apuesta_torneoarg", "todo", 2000);
    $_SESSION['premioTotalArg'] = $PremioArgTotal;

    $_SESSION['equipo1TA'] = $Equipo1TA;
    $_SESSION['equipo2TA'] = $Equipo2TA;
    $_SESSION['equipo3TA'] = $Equipo3TA;
    $_SESSION['equipo4TA'] = $Equipo4TA;
    $_SESSION['equipo5TA'] = $Equipo5TA;
    $_SESSION['equipo6TA'] = $Equipo6TA;
    $_SESSION['equipo7TA'] = $Equipo7TA;
    $_SESSION['equipo8TA'] = $Equipo8TA;
    $_SESSION['equipo9TA'] = $Equipo9TA;
    $_SESSION['equipo10TA'] = $Equipo10TA;
    $_SESSION['equipo11TA'] = $Equipo11TA;
    $_SESSION['equipo12TA'] = $Equipo12TA;
    $_SESSION['equipo13TA'] = $Equipo13TA;
    $_SESSION['equipo14TA'] = $Equipo14TA;
    $_SESSION['equipo15TA'] = $Equipo15TA;
    $_SESSION['equipo16TA'] = $Equipo16TA;
    $_SESSION['equipo17TA'] = $Equipo17TA;
    $_SESSION['equipo18TA'] = $Equipo18TA;
    $_SESSION['equipo19TA'] = $Equipo19TA;
    $_SESSION['equipo20TA'] = $Equipo20TA;
    $_SESSION['equipo21TA'] = $Equipo21TA;
    $_SESSION['equipo22TA'] = $Equipo22TA;
    $_SESSION['equipo23TA'] = $Equipo23TA;
    $_SESSION['equipo24TA'] = $Equipo24TA;
    $_SESSION['equipo25TA'] = $Equipo25TA;
    $_SESSION['equipo26TA'] = $Equipo26TA;
    $_SESSION['equipo27TA'] = $Equipo27TA;
    $_SESSION['equipo28TA'] = $Equipo28TA;








//////////////ELIMINATORIAS - MODIFICAR CADA FECHA/////////////////
    $NombreFechaEliminatoria = "fecha1y2";
    $ValorApuestaEliminatoria = 500;
    $Equipo1Elim = "Central Cba";
    $Equipo2Elim = "Argentinos";
    $Equipo3Elim = "Belgrano";
    $Equipo4Elim = "Tigre";
    $Equipo5Elim = "River"; 
    $Equipo6Elim = "Arsenal";
    $Equipo7Elim = "Racing";
    $Equipo8Elim = "Lanus";
    $Equipo9Elim = "Rosario Cen";
    $Equipo10Elim = "Godoy Cruz";
    $Equipo11Elim = "Estudiantes";
    $Equipo12Elim = "Sarmiento";
    $Equipo13Elim = "San Lorenzo";
    $Equipo14Elim = "Union";
    $Equipo15Elim = "Colon";
    $Equipo16Elim = "Huracan";
    $Equipo17Elim = "Barraca Cen";
    $Equipo18Elim = "Gimnasia";
    $Equipo19Elim = "Instituto";
    $Equipo20Elim = "Newells";

    $Apostadores1= [];
    $Puntajes1 = [];
    $PronosticoFecha1= [];
    $ResultadosFecha1= [];
    $Apostadores1=cargarApostadores("apuesta_eliminatorias", "fecha1y2", $Apostadores1);
    $Puntajes1=cargarPuntajesPorFecha("apuesta_eliminatorias", "resultado_eliminatorias", "fecha1y2", $Puntajes1, $Apostadores1);
    $_SESSION['Apos1ELI'] = $Apostadores1;
    $_SESSION['Pun1ELI'] = $Puntajes1;
    $PronosticoFecha1 = mostrarMisPronosticos("apuesta_eliminatorias", "fecha1y2", $PronosticoFecha1);
    $ResultadosFecha1 = mostrarResultados("resultado_eliminatorias", "fecha1y2", $ResultadosFecha1);
    $_SESSION['Pronostico1ELI'] = $PronosticoFecha1;
    $_SESSION['Resultados1ELI'] = $ResultadosFecha1;

    /* $Apostadores2= [];
    $Puntajes2 = [];
    $PronosticoFecha2= [];
    $ResultadosFecha2= [];
    $Apostadores2=cargarApostadores("apuesta_eliminatorias", "fecha3y4", $Apostadores2);
    $Puntajes2=cargarPuntajesPorFecha("apuesta_eliminatorias", "resultado_eliminatorias", "fecha3y4", $Puntajes2, $Apostadores2);
    $_SESSION['Apos2ELI'] = $Apostadores2;
    $_SESSION['Pun2ELI'] = $Puntajes2;
    $PronosticoFecha2 = mostrarMisPronosticos("apuesta_eliminatorias", "fecha3y4", $PronosticoFecha2);
    $ResultadosFecha2 = mostrarResultados("resultado_eliminatorias", "fecha3y4", $ResultadosFecha2);
    $_SESSION['Pronostico2ELI'] = $PronosticoFecha2;
    $_SESSION['Resultados2ELI'] = $ResultadosFecha2;

    $Apostadores3= [];
    $Puntajes3 = [];
    $PronosticoFecha3= [];
    $ResultadosFecha3= [];
    $Apostadores3=cargarApostadores("apuesta_eliminatorias", "fecha5y6", $Apostadores3);
    $Puntajes3=cargarPuntajesPorFecha("apuesta_eliminatorias", "resultado_eliminatorias", "fecha5y6", $Puntajes3, $Apostadores3);
    $_SESSION['Apos3ELI'] = $Apostadores3;
    $_SESSION['Pun3ELI'] = $Puntajes3;
    $PronosticoFecha3 = mostrarMisPronosticos("apuesta_eliminatorias", "fecha5y6", $PronosticoFecha3);
    $ResultadosFecha3 = mostrarResultados("resultado_eliminatorias", "fecha5y6", $ResultadosFecha3);
    $_SESSION['Pronostico3ELI'] = $PronosticoFecha3;
    $_SESSION['Resultados3ELI'] = $ResultadosFecha3;

    $Apostadores4= [];
    $Puntajes4 = [];
    $PronosticoFecha4= [];
    $ResultadosFecha4= [];
    $Apostadores4=cargarApostadores("apuesta_eliminatorias", "fecha7y8", $Apostadores4);
    $Puntajes4=cargarPuntajesPorFecha("apuesta_eliminatorias", "resultado_eliminatorias", "fecha7y8", $Puntajes4, $Apostadores4);
    $_SESSION['Apos4ELI'] = $Apostadores4;
    $_SESSION['Pun4ELI'] = $Puntajes4;
    $PronosticoFecha4 = mostrarMisPronosticos("apuesta_eliminatorias", "fecha7y8", $PronosticoFecha4);
    $ResultadosFecha4 = mostrarResultados("resultado_eliminatorias", "fecha7y8", $ResultadosFecha4);
    $_SESSION['Pronostico4ELI'] = $PronosticoFecha4;
    $_SESSION['Resultados4ELI'] = $ResultadosFecha4; */



//////////ELIMINATORIAS - NO TOCAR/////////////////////////
    $PremioEliminatoria = premios ("apuesta_eliminatorias", $NombreFechaEliminatoria, $ValorApuestaEliminatoria);
    $_SESSION['nombreFechaEliminatoria'] = $NombreFechaEliminatoria;
    $_SESSION['valorApuestaEliminatoria'] =$ValorApuestaEliminatoria;
    $_SESSION['premioEliminatoria'] = $PremioEliminatoria;

    $_SESSION['equipo1Elim'] = $Equipo1Elim;
    $_SESSION['equipo2Elim'] = $Equipo2Elim;
    $_SESSION['equipo3Elim'] = $Equipo3Elim;
    $_SESSION['equipo4Elim'] = $Equipo4Elim;
    $_SESSION['equipo5Elim'] = $Equipo5Elim;
    $_SESSION['equipo6Elim'] = $Equipo6Elim;
    $_SESSION['equipo7Elim'] = $Equipo7Elim;
    $_SESSION['equipo8Elim'] = $Equipo8Elim;
    $_SESSION['equipo9Elim'] = $Equipo9Elim;
    $_SESSION['equipo10Elim'] = $Equipo10Elim;
    $_SESSION['equipo11Elim'] = $Equipo11Elim;
    $_SESSION['equipo12Elim'] = $Equipo12Elim;
    $_SESSION['equipo13Elim'] = $Equipo13Elim;
    $_SESSION['equipo14Elim'] = $Equipo14Elim;
    $_SESSION['equipo15Elim'] = $Equipo15Elim;
    $_SESSION['equipo16Elim'] = $Equipo16Elim;
    $_SESSION['equipo17Elim'] = $Equipo17Elim;
    $_SESSION['equipo18Elim'] = $Equipo18Elim;
    $_SESSION['equipo19Elim'] = $Equipo19Elim;
    $_SESSION['equipo20Elim'] = $Equipo20Elim;

////////////LIBERTADORES FASE DE GRUPO - NO TOCAR//////////////////////////

    $ValorApuestaLibertadores = 500;

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
//////////////////////////////////////////////////////////////


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <link rel="stylesheet" href="../CSS/styleHome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style= "background-image: url('../img/fondoHomee.png'); background-size: cover">  

    <div id="titulo">
	<span>H</span>
	<span>O</span>
	<span>M</span>
	<span>E</span>
    </div>
    

<div id="contenedor" class="col-12 row container-fluid d-flex justify-content-center" style="height:400px; width:100%; margin:0px 20px 10px 10px">
 
<div id="eliminatorias" class="carousel slide col-3 h-50 d-inline-block p-0 bg-success ">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/eliminatorias.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 8% 10% 5% 10% ">
          
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


<div id="libertadores" class="carousel slide col-3 h-50 d-inline-block p-0 bg-warning" style="margin: 0px 10px 10px 10px">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/libertadoress.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 50%; margin: 8% 10% 5% 10%  ">
            
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

<div id="argentina" class="carousel slide col-3 h-50 d-inline-block p-0 bg-danger ">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/ligaArg.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 8% 10% 5% 10%  ">
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

<div id="champions" class="carousel slide col-3 h-50 d-inline-block p-0 bg-primary ">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/champions.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 8% 10% 5% 10% ">
          
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaEliminatoria.php'">Jugar</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesEliminatoria.php'">Resultados</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticosEliminatorias.php'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#champions" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>


<div id="sudamericana" class="carousel slide col-3 h-50 d-inline-block p-0 bg-light" style="margin: 0px 10px 10px 10px">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/sudamericana.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 50%; margin: 8% 10% 5% 10%  ">
            
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaLibertadores.php'">Jugar</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesLibertadores.php'">Resultados</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticosLibertadores.php'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#sudamericana" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>

<div id="premier" class="carousel slide col-3 h-50 d-inline-block p-0 bg-info ">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="../img/premier.png "style="width: 100%; height: 200px">
        </div>
        <div class="carousel-item">
            <div class="d-grid gap-2" style="width: 80%; height: 100%; margin: 8% 10% 5% 10%  ">
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='apuestaTorneoArg.php'">Jugar</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='posicionesTorneoArg.php'">Resultados</button>
                <button type="button" disabled class="btn btn-outline-dark btn-lg"  onclick="location.href='pronosticoTorneoArg'">Mis pronosticos</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#premier" data-bs-slide="next">
        <div class="carousel-control-next-icon" aria-hidden="true"></div>
        <div class="visually-hidden">Next</div>
  </button>
</div>
</div>


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>    
</body>
    
</html>

