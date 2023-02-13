<?php 
include("../../configuracion/cabecera.php");
require ('../../configuracion/conexion.php');
include("../../configuracion/menuDesplegable.php");
require ('../../funciones/funciones.php');

$ValorApuesta= $_SESSION['valorApuestaEliminatoria'];
$NombreDeFecha= $_SESSION['nombreFechaEliminatoria'];
$CantidadApostadores= $_SESSION['premioEliminatoria']/($ValorApuesta*70/100);
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>pagina prueba</title>
    <link rel="stylesheet" href="../../CSS/styleApuestaEliminatorias.css">
     
</head>

<div class="contenedor">

<body style= "background-image: url('../../img/fondo.png'); background-size: cover">  
<h1 data-shadow='Eliminatorias'>Eliminatorias</h1>

<div class="container text-center" >
  <div class="row g-2">
    <div class="col-5" id="tablas">
      <div class="p-3">
      <form method="POST">
    <div>
    
    <div class="p-3 mb-2 bg-success text-white"  >Fecha 1</div>        
   
    <table class="table table-success table-striped">
        
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
                
                <td><?php echo $_SESSION['equipo1Elim']?></td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td><?php echo $_SESSION['equipo2Elim']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo3Elim']?></td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td><?php echo $_SESSION['equipo4Elim']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo5Elim']?></td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td><?php echo $_SESSION['equipo6Elim']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo7Elim']?></td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td><?php echo $_SESSION['equipo8Elim']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo9Elim']?></td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td><?php echo $_SESSION['equipo10Elim']?></td>
            </tr>
    </table>
        
    </div>

</div>
</div>

    <div class="col-5"  id="tablas">
      <div class="p-3">
        <div class="p-3 mb-2 bg-success text-white">Fecha 2</div>        

        <table class="table table-success table-striped">
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
                  
                    <td><?php echo $_SESSION['equipo11Elim']?></td>
                    <td><input type="radio" value="L" name="p6" id="p6"required></td>
                    <td><input type="radio" value="E" name="p6" id="p6"required></td>
                    <td><input type="radio" value="V" name="p6" id="p6"required></td>
                    <td><?php echo $_SESSION['equipo12Elim']?></td>
                </tr>
                <tr>
                 
                    <td><?php echo $_SESSION['equipo13Elim']?></td>
                    <td><input type="radio" value="L" name="p7"id="p7"required></td>
                    <td><input type="radio" value="E" name="p7"id="p7"required></td>
                    <td><input type="radio" value="V" name="p7" id="p7"required></td>
                    <td><?php echo $_SESSION['equipo14Elim']?></td>
                </tr>
                <tr>
                  
                    <td><?php echo $_SESSION['equipo15Elim']?></td>
                    <td><input type="radio" value="L" name="p8" id="p8"required></td>
                    <td><input type="radio" value="E" name="p8" id="p8"required></td>
                    <td><input type="radio" value="V" name="p8" id="p8"required></td>
                    <td><?php echo $_SESSION['equipo16Elim']?></td>
                </tr>
                <tr>
                    
                    <td><?php echo $_SESSION['equipo17Elim']?></td>
                    <td><input type="radio" value="L" name="p9" id="p9"required></td>
                    <td><input type="radio" value="E" name="p9" id="p9"required></td>
                    <td><input type="radio" value="V" name="p9" id="p9"required></td>
                    <td><?php echo $_SESSION['equipo18Elim']?></td>
                </tr>
                <tr>
                    
                    <td><?php echo $_SESSION['equipo19Elim']?></td>
                    <td><input type="radio" value="L" name="p10" id="p10"required></td>
                    <td><input type="radio" value="E" name="p10" id="p10"required></td>
                    <td><input type="radio" value="V" name="p10" id="p10"required></td>
                    <td><?php echo $_SESSION['equipo20Elim']?></td>
                </tr>
        </table>
        </div>
        </div> 
        <div class="col-2"  id="info">
          <div class="p-3">
          <div class="card text-bg-primary mb-3" style="width: 150%" id="lo">
            <div class="card-header">Informacion</div>
            <div class="card-body">
                <p class="card-text">Valor apuesta: $ <?php  echo $ValorApuesta?><br>La apuesta finaliza en: <div id="reloj"></div><hr size="1.5%" color="black"/> Apostadores: <?php echo $CantidadApostadores ?><br>Premio: $ <?php echo $_SESSION['premioEliminatoria']?></p>
            </div>
          </div>
          </div>
        </div>
  </div>
</div> 

<div class="container text-center">
<div class="row g-2">
    <div class="col-10"  id="boton">
    <div class="d-grid gap-2 col-6 mx-auto">
    <button type="submit" class="btn btn-outline-success" name= "apostar" id= "apostar">Apostar Fecha 1 y 2</button>
    </div>
    </div>
    </form>
</div>
</div> 


  </body>
  </html>
</div> 



    <?php  
  if (isset($_POST["apostar"])){ 
  
  cargarApuesta("apuesta_eliminatorias", $NombreDeFecha, $ValorApuesta);
  
}?>




<script src="../../js\simplyCountdown.min.js"></script>
<script src="../../js\cuentaRegresivaEliminatorias.js"></script>

