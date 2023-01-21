<?php 

include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');

/////definir valor de la apuesta////
$ValorApuesta= 500;


///IMPORTANTE///
//El tiempo para la cuenta regresiva se modifica desde el archivo cuentaRegresiva.js que esta en la carpeta JS
/////////////////////////////////////////////////////////
$CantidadApostadoresGA=saberCantApostadores("apuesta_libertadores","GrupoA");
$PremioGA=$CantidadApostadoresGA*$ValorApuesta*70/100;
$_SESSION['premioGA'] = $PremioGA;

$CantidadApostadoresGB=saberCantApostadores("apuesta_libertadores","GrupoB");
$PremioGB=$CantidadApostadoresGB*$ValorApuesta*70/100;
$_SESSION['premioGB'] = $PremioGB;

$CantidadApostadoresGC=saberCantApostadores("apuesta_libertadores","GrupoC");
$PremioGC=$CantidadApostadoresGC*$ValorApuesta*70/100;
$_SESSION['premioGC'] = $PremioGC;

$CantidadApostadoresGD=saberCantApostadores("apuesta_libertadores","GrupoD");
$PremioGD=$CantidadApostadoresGD*$ValorApuesta*70/100;
$_SESSION['premioGD'] = $PremioGD;

$CantidadApostadoresGE=saberCantApostadores("apuesta_libertadores","GrupoE");
$PremioGE=$CantidadApostadoresGE*$ValorApuesta*70/100;
$_SESSION['premioGE'] = $PremioGE;

$CantidadApostadoresGF=saberCantApostadores("apuesta_libertadores","GrupoF");
$PremioGF=$CantidadApostadoresGF*$ValorApuesta*70/100;
$_SESSION['premioGF'] = $PremioGF;

$CantidadApostadoresGG=saberCantApostadores("apuesta_libertadores","GrupoG");
$PremioGG=$CantidadApostadoresGG*$ValorApuesta*70/100;
$_SESSION['premioGG'] = $PremioGG;

$CantidadApostadoresGH=saberCantApostadores("apuesta_libertadores","GrupoH");
$PremioGH=$CantidadApostadoresGH*$ValorApuesta*70/100;
$_SESSION['premioGH'] = $PremioGH;
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>pagina prueba</title>
    <link rel="stylesheet" href="../CSS/styleText.css">
</head>
<body style= "background-image: url('../img/fondoLiber.png'); background-size: cover">
<div class="title">
 <h1>Copa Libertadores - Fase de grupo</h1>
</div>

<div class="container text-center">
  <div class="row g-2">
    <div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo A</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGA" id= "apostarGA">Apostar Grupo A</button>
        </div>
    </form>
    </div>
</div>
</div>

<div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo B</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGB" id= "apostarGB">Apostar Grupo B</button>
        </div>
    </form>
    </div>
</div>
</div>
<div class="col-2" >
      <div class="p-3"style="position:absolute">
      <div class="card text-bg-primary mb-3" style="width: 200px">
        <div class="card-header">Informacion</div>
        <div class="card-body">
            <p class="card-text">
                Cada grupo es una apuesta independiente.<br><br>
                Valor de la apuesta por grupo: $ <?php  echo $ValorApuesta?><hr size="2px" color="black"/>
                Todas las apuesta finalizan en: <div id="reloj"></div><hr size="2px" color="black"/>
                Grupo A<br>Apostadores: <?php  echo $CantidadApostadoresGA?><br>Premio: $<?php  echo $PremioGA?><hr size="2px" color="black"/>
                Grupo B<br>Apostadores: <?php  echo $CantidadApostadoresGB?><br>Premio: $<?php  echo $PremioGB?><hr size="2px" color="black"/>
                Grupo C<br>Apostadores: <?php  echo $CantidadApostadoresGC?><br>Premio: $<?php  echo $PremioGC?><hr size="2px" color="black"/>
                Grupo D<br>Apostadores: <?php  echo $CantidadApostadoresGD?><br>Premio: $<?php  echo $PremioGD?><hr size="2px" color="black"/>
                Grupo E<br>Apostadores: <?php  echo $CantidadApostadoresGE?><br>Premio: $<?php  echo $PremioGE?><hr size="2px" color="black"/>
                Grupo F<br>Apostadores: <?php  echo $CantidadApostadoresGF?><br>Premio: $<?php  echo $PremioGF?><hr size="2px" color="black"/>
                Grupo G<br>Apostadores: <?php  echo $CantidadApostadoresGG?><br>Premio: $<?php  echo $PremioGG?><hr size="2px" color="black"/>
                Grupo H<br>Apostadores: <?php  echo $CantidadApostadoresGH?><br>Premio: $<?php  echo $PremioGH?><hr size="2px" color="black"/>
            </p>
        </div>
        </div>
      </div>
</div>

    <div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo C</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGC" id= "apostarGC">Apostar Grupo C</button>
        </div>
    </form>
    </div>
</div>
</div>

<div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo D</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGD" id= "apostarGD">Apostar Grupo D</button>
        </div>
    </form>
    </div>
</div>
</div>

    <div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo E</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGE" id= "apostarGE">Apostar Grupo E</button>
        </div>
    </form>
    </div>
</div>
</div>

<div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo F</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGF" id= "apostarGF">Apostar Grupo F</button>
        </div>
    </form>
    </div>
</div>
</div>

    <div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo G</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGG" id= "apostarGG">Apostar Grupo G</button>
        </div>
    </form>
    </div>
</div>
</div>

<div class="col-5">
      <div class="p-3">
      <form method="POST">
        <div>
        
        <div class="p-3 mb-2 bg-secondary text-white" >Grupo H</div>        
    
        <table class="table table-secondary table-striped">
        
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Local</th>
                <th>Empate</th>
                <th>Visitante</th>
                <th>Equipo</th>
            </tr>
        </thead>
    
        <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td>BRA</td>
            </tr>
            <tr>
                
                <td>URU</td>
                <td><input type="radio" value="L" name="p8"id="p8"required></td>
                <td><input type="radio" value="E" name="p8"id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td>ECU</td>
            </tr>
            <tr>
                
                <td>COL</td>
                <td><input type="radio" value="L" name="p9" id="p9"required></td>
                <td><input type="radio" value="E" name="p9" id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td>CHI</td>
            </tr>
            <tr>
                
                <td>PER</td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td>BOL</td>
            </tr>
            <tr>
                
                <td>VEN</td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td>PAR</td>
            </tr>
            <tr>
                
                <td>ARG</td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td>BRA</td>
            </tr>
            
        </table>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-secondary" name= "apostarGH" id= "apostarGH">Apostar Grupo H</button>
        </div>
    </form>
    </div>
</div>
</div>

</div>
</div>



    </body>
    </html>

    <?php  
  if (isset($_POST["apostarGA"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoA", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGA=saberCantApostadores("apuesta_libertadores","GrupoA");
    $PremioGA=$CantidadApostadoresGA*$ValorApuesta*70/100;
    $_SESSION['premioGA'] = $PremioGA;
  }
  if (isset($_POST["apostarGB"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoB", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGB=saberCantApostadores("apuesta_libertadores","GrupoB");
    $PremioGB=$CantidadApostadoresGB*$ValorApuesta*70/100;
    $_SESSION['premioGB'] = $PremioGB;;
  }
  if (isset($_POST["apostarGC"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoC", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGC=saberCantApostadores("apuesta_libertadores","GrupoC");
    $PremioGC=$CantidadApostadoresGC*$ValorApuesta*70/100;
    $_SESSION['premioGC'] = $PremioGC;
}
  if (isset($_POST["apostarGD"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoD", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGD=saberCantApostadores("apuesta_libertadores","GrupoD");
    $PremioGD=$CantidadApostadoresGD*$ValorApuesta*70/100;
    $_SESSION['premioGD'] = $PremioGD;
  }
  if (isset($_POST["apostarGE"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoE", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGE=saberCantApostadores("apuesta_libertadores","GrupoE");
    $PremioGE=$CantidadApostadoresGE*$ValorApuesta*70/100;
    $_SESSION['premioGE'] = $PremioGE;
  }
  if (isset($_POST["apostarGF"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoF", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGF=saberCantApostadores("apuesta_libertadores","GrupoF");
    $PremioGF=$CantidadApostadoresGF*$ValorApuesta*70/100;
    $_SESSION['premioGF'] = $PremioGF;
  }
  if (isset($_POST["apostarGG"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoG", $ValorApuesta, "apuestaLibertadores.php");    
    $CantidadApostadoresGG=saberCantApostadores("apuesta_libertadores","GrupoG");
    $PremioGG=$CantidadApostadoresGG*$ValorApuesta*70/100;
    $_SESSION['premioGG'] = $PremioGG;
  }
  if (isset($_POST["apostarGH"])){ 
    cargarApuesta("apuesta_libertadores", "GrupoH", $ValorApuesta, "apuestaLibertadores.php");
    $CantidadApostadoresGH=saberCantApostadores("apuesta_libertadores","GrupoH");
    $PremioGH=$CantidadApostadoresGH*$ValorApuesta*70/100;
    $_SESSION['premioGH'] = $PremioGH;
  
  }
   ?>







<script src="../js\simplyCountdown.min.js"></script>
<script src="../js\cuentaRegresivaLibertadores.js"></script>
