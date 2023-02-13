<?php
include("../../configuracion/cabecera.php");
include("../../configuracion/menuDesplegable.php");
require ('../../configuracion/conexion.php');
require ('../../funciones/funciones.php');

$PronosticoGrupoA= [];
$PronosticoGrupoB= [];
$PronosticoGrupoC= [];
$PronosticoGrupoD= [];
$PronosticoGrupoE= [];
$PronosticoGrupoF= [];
$PronosticoGrupoG= [];
$PronosticoGrupoH= [];

$ResultadosGrupoA= [];
$ResultadosGrupoB= [];
$ResultadosGrupoC= [];
$ResultadosGrupoD= [];
$ResultadosGrupoE= [];
$ResultadosGrupoF= [];
$ResultadosGrupoG= [];
$ResultadosGrupoH= [];

$PronosticoGrupoA = mostrarMisPronosticos("apuesta_libertadores", "GrupoA", $PronosticoGrupoA);
$PronosticoGrupoB = mostrarMisPronosticos("apuesta_libertadores", "GrupoB", $PronosticoGrupoB);
$PronosticoGrupoC = mostrarMisPronosticos("apuesta_libertadores", "GrupoC", $PronosticoGrupoC);
$PronosticoGrupoD = mostrarMisPronosticos("apuesta_libertadores", "GrupoD", $PronosticoGrupoD);
$PronosticoGrupoE = mostrarMisPronosticos("apuesta_libertadores", "GrupoE", $PronosticoGrupoE);
$PronosticoGrupoF = mostrarMisPronosticos("apuesta_libertadores", "GrupoF", $PronosticoGrupoF);
$PronosticoGrupoG = mostrarMisPronosticos("apuesta_libertadores", "GrupoG", $PronosticoGrupoG);
$PronosticoGrupoH = mostrarMisPronosticos("apuesta_libertadores", "GrupoH", $PronosticoGrupoH);

$ResultadosGrupoA = mostrarResultados("resultados_libertadores", "GrupoA", $ResultadosGrupoA);
$ResultadosGrupoB = mostrarResultados("resultados_libertadores", "GrupoB", $ResultadosGrupoB);
$ResultadosGrupoC = mostrarResultados("resultados_libertadores", "GrupoC", $ResultadosGrupoC);
$ResultadosGrupoD = mostrarResultados("resultados_libertadores", "GrupoD", $ResultadosGrupoD);
$ResultadosGrupoE = mostrarResultados("resultados_libertadores", "GrupoE", $ResultadosGrupoE);
$ResultadosGrupoF = mostrarResultados("resultados_libertadores", "GrupoF", $ResultadosGrupoF);
$ResultadosGrupoG = mostrarResultados("resultados_libertadores", "GrupoG", $ResultadosGrupoG);
$ResultadosGrupoH = mostrarResultados("resultados_libertadores", "GrupoH", $ResultadosGrupoH);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styleApuestaLibertadores.css">
</head>
<body style= "background-image: url('../../img/fondoLiber.png'); background-size: cover">
<div class="title">
 <h1>Copa Libertadores - Fase de grupo</h1>
</div>


<div style="width:90%; margin:auto; border-radius: 15px" >
    <div class="card">
          <div
            class="card-header d-flex justify-content-between align-items-center p-3 bg-primary text-white border-bottom-0"
            style="border-top-left-radius: 1%; border-top-radius: 15px">
            <i class="fas fa-angle-left"></i>
            <p class="mb-0 fw-bold">Mis pronosticos realizados</p>
            <i class="fas fa-times"></i>
          </div>
          <table id="table" class="display">
            <thead>
                <tr>                          
                <th>GRUPOS</th>
                <th>P1</th>
                <th>P2</th>
                <th>P3</th>
                <th>P4</th>
                <th>P5</th>
                <th>P6</th>
                <th>P7</th>
                <th>P8</th>
                <th>P9</th>
                <th>P10</th>
                <th>P11</th>
                <th>P12</th>
                <th>PUNTAJE</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g1" aria-controls="g1">
                        Grupo A
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoA); $i++) {
                            if ( $ResultadosGrupoA[$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $PronosticoGrupoA[$i] ?></td>
                            <?php  }elseif( $PronosticoGrupoA[$i] == $ResultadosGrupoA[$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoA[$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoA[$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>
                        <td><?php echo $PronosticoGrupoA[12] ?></td>
                </tr>
                <tr> 
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g2" aria-controls="g2">
                        Grupo B
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoB); $i++) {
                            if ( $ResultadosGrupoB[$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $PronosticoGrupoB[$i] ?></td>
                            <?php  }elseif( $PronosticoGrupoB[$i] == $ResultadosGrupoB[$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoB[$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoB[$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>
                        <td><?php echo $PronosticoGrupoB[12] ?></td>
                </tr>
                <tr>  
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g3" aria-controls="g3">
                        Grupo C
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoC); $i++) {
                           if ( $ResultadosGrupoC[$i] == "-" ){  ?>
                            <td style="background-color:while"><?php echo $PronosticoGrupoC[$i] ?></td>
                        <?php  }elseif( $PronosticoGrupoC[$i] == $ResultadosGrupoC[$i] ){?>
                        <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoC[$i]; ?></td>
                        <?php  }else{?>
                            <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoC[$i] ?></td>
                        <?php  }  ?>
                    <?php  }  ?>
                        <td><?php echo $PronosticoGrupoC[12] ?></td>
                </tr>
                <tr> 
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g4" aria-controls="g1">
                        Grupo D
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoD); $i++) {
                           if ( $ResultadosGrupoD[$i] == "-" ){  ?>
                            <td style="background-color:while"><?php echo $PronosticoGrupoD[$i] ?></td>
                        <?php  }elseif( $PronosticoGrupoD[$i] == $ResultadosGrupoD[$i] ){?>
                        <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoD[$i]; ?></td>
                        <?php  }else{?>
                            <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoD[$i] ?></td>
                        <?php  }  ?>
                    <?php  }  ?>
                        <td><?php echo $PronosticoGrupoD[12] ?></td>
                </tr>
                <tr>  
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g5" aria-controls="g1">
                        Grupo E
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoE); $i++) {
                            if ( $ResultadosGrupoE[$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $PronosticoGrupoE[$i] ?></td>
                            <?php  }elseif( $PronosticoGrupoE[$i] == $ResultadosGrupoE[$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoE[$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoE[$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>
                        <td><?php echo $PronosticoGrupoE[12] ?></td>
                </tr>
                <tr>  
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g6" aria-controls="g1">
                        Grupo F
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoF); $i++) {
                           if ( $ResultadosGrupoG[$i] == "-" ){  ?>
                            <td style="background-color:while"><?php echo $PronosticoGrupoG[$i] ?></td>
                        <?php  }elseif( $PronosticoGrupoG[$i] == $ResultadosGrupoG[$i] ){?>
                        <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoG[$i]; ?></td>
                        <?php  }else{?>
                            <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoG[$i] ?></td>
                        <?php  }  ?>
                    <?php  }  ?>
                        <td><?php echo $PronosticoGrupoF[12] ?></td>
                </tr>
                <tr>  
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g7" aria-controls="g1">
                        Grupo G
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoG); $i++) {
                           if ( $ResultadosGrupoA[$i] == "-" ){  ?>
                            <td style="background-color:while"><?php echo $PronosticoGrupoA[$i] ?></td>
                        <?php  }elseif( $PronosticoGrupoA[$i] == $ResultadosGrupoA[$i] ){?>
                        <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoA[$i]; ?></td>
                        <?php  }else{?>
                            <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoA[$i] ?></td>
                        <?php  }  ?>
                    <?php  }  ?>
                        <td><?php echo $PronosticoGrupoG[12] ?></td>
                </tr>
                <tr>  
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#g8" aria-controls="g1">
                        Grupo H
                        </button></td>
                        <?php for($i=0; $i<count($ResultadosGrupoH); $i++) {
                            if ( $ResultadosGrupoH[$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $PronosticoGrupoH[$i] ?></td>
                            <?php  }elseif( $PronosticoGrupoH[$i] == $ResultadosGrupoH[$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $PronosticoGrupoH[$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $PronosticoGrupoH[$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>
                        <td><?php echo $PronosticoGrupoH[12] ?></td>      
                </tr>           
            </tbody>
        </table> 
    </div>
</div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g1" aria-labelledby="g1Label" style="background-color: DarkGray">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo A</h3>
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
            <table id="tableA" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoA[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                
            </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g2" aria-labelledby="g2Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo B</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <table id="tableB" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoB[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                          
            </div>
    </div>
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g3" aria-labelledby="g3Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo C</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableC" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoC[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g4" aria-labelledby="g2Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo D</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableD" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoD[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g5" aria-labelledby="g1Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo E</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableE" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoE[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g6" aria-labelledby="g2Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo F</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableF" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoF[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>
    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g7" aria-labelledby="g1Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo G</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableG" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoG[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="g8" aria-labelledby="g2Label" style="background-color: DarkGray; ">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Grupo H</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <table id="tableH" class="display" >
                <thead>
                    <tr>
                    <th></th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>p1</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[9]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p11</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[10]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p12</td>
                        <td>Boca - River</td>
                        <td><?php echo  $ResultadosGrupoH[11]; ?></td>
                    </tr>          
                </tbody>
            </table>                           
            </div>
    </div>
</body>        



<script>
$(document).ready( function () {
    $('#table' ).DataTable({

        "pageLength": 8,
        "searching": false,
        "lengthChange": false,
        "paging": false, // elimina botones de ordenamiento de pagina
        "info": false,
        "order": false,
        
        columnDefs:[
           
            { "className": "text-center", "sortable": false, "width": "30%", "targets": 0 }, //sortable saca las fechas de ordenamiento de las columnas
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 1},
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 2 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 3 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 4 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 5 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 6 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 7 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 8 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 9 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 10 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 11 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 12 },
            { "className": "text-center", "sortable": false, "width": "10%", "targets": 13 }
            ]
            
            
    }) 
} );

$(document).ready( function () {
    $('#tableA, #tableB, #tableC, #tableD, #tableE, #tableF, #tableG, #tableH' ).DataTable({
        "pageLength": 12,
        "searching": false,
        "lengthChange": false,
        "paging": false, // elimina botones de ordenamiento de pagina
        "info": false,
        "order": false,
        
        columnDefs:[
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 0 }, //sortable saca las fechas de ordenamiento de las columnas
            { "className": "text-center", "sortable": false, "width": "80%", "targets": 1},
            { "className": "text-center", "sortable": false, "width": "15%", "targets": 2 },
        ]
        
    }) 
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>


