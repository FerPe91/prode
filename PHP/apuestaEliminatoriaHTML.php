<?php include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');


///////////////////// averigua por sentencia cuantos usuarios realizaron apuesta con el campo fecha ////////////////
function saberCantApostadores($fecha){
    require ('../configuracion/conexion.php');
    $cantApostadores= mysqli_query($conexion, "SELECT * FROM apuesta_eliminatorias WHERE fecha ='$fecha'");
    $cantidad=mysqli_num_rows($cantApostadores);

    return $cantidad;
}
////// definir valor de la apuesta  pasar por parametro las fechas //////////
$ValorApuesta= 500;

$_SESSION["valorApuesta"] = $ValorApuesta;
$Cantidad1y2=saberCantApostadores("fecha1y2");
$Cantidad3y4=saberCantApostadores("fecha3y4");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>pagina prueba</title>
</head>
<body>


        <?php  ///////////////////////////////fecha 1 y 2 /////////////////////////////////////////////?>

<div class="container text-center">
  <div class="row g-2">
    <div class="col-5">
      <div class="p-3">
      <form method="POST">
    <div>
    
    <div class="p-3 mb-2 bg-success text-white" >Fecha 1</div>        
   
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
    </table>
        
    </div>

</div>
</div>

    <div class="col-5">
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
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p6" id="p6"required></td>
                    <td><input type="radio" value="E" name="p6" id="p6"required></td>
                    <td><input type="radio" value="V" name="p6" id="p6"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p7"id="p7"required></td>
                    <td><input type="radio" value="E" name="p7"id="p7"required></td>
                    <td><input type="radio" value="V" name="p7" id="p7"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p8" id="p8"required></td>
                    <td><input type="radio" value="E" name="p8" id="p8"required></td>
                    <td><input type="radio" value="V" name="p8" id="p8"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p9" id="p9"required></td>
                    <td><input type="radio" value="E" name="p9" id="p9"required></td>
                    <td><input type="radio" value="V" name="p9" id="p9"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p10" id="p10"required></td>
                    <td><input type="radio" value="E" name="p10" id="p10"required></td>
                    <td><input type="radio" value="V" name="p10" id="p10"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        
    </div>
</div> 


<div class="col-2">
      <div class="p-3">
      <div class="card text-bg-primary mb-3" style="width: 200px">
        <div class="card-header">Informacion</div>
        <div class="card-body">
            <p class="card-text">Valor apuesta: $ <?php  echo $ValorApuesta?><br><br>Fecha limite: 15/3<br><hr size="2px" color="black"/> Apostadores: <?php echo $Cantidad1y2 ?> <br><br>Premio: $ <?php echo $Cantidad1y2*350?></p>
        </div>
        </div>
      </div>
</div>

    <div class="d-grid gap-2">
    <button type="submit" class="btn btn-outline-success" name= "apostar1y2" id= "apostar1y2">Apostar Fecha 1 y 2</button>
    </div>
</form>

<hr size="8px" color="black" />

<?php  ///////////////////////////////fecha 3 y 4 /////////////////////////////////////////////?>

<div class="container text-center">
  <div class="row g-2">
    <div class="col-5">
      <div class="p-3">
      <form method="POST">
    <div>
    
    <div class="p-3 mb-2 bg-success text-white" >Fecha 3</div>        
  
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
    </table>
        
    </div>

</div>
</div>

    <div class="col-5">
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
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p6" id="p6"required></td>
                    <td><input type="radio" value="E" name="p6" id="p6"required></td>
                    <td><input type="radio" value="V" name="p6" id="p6"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p7"id="p7"required></td>
                    <td><input type="radio" value="E" name="p7"id="p7"required></td>
                    <td><input type="radio" value="V" name="p7" id="p7"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p8" id="p8"required></td>
                    <td><input type="radio" value="E" name="p8" id="p8"required></td>
                    <td><input type="radio" value="V" name="p8" id="p8"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p9" id="p9"required></td>
                    <td><input type="radio" value="E" name="p9" id="p9"required></td>
                    <td><input type="radio" value="V" name="p9" id="p9"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p10" id="p10"required></td>
                    <td><input type="radio" value="E" name="p10" id="p10"required></td>
                    <td><input type="radio" value="V" name="p10" id="p10"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        
    </div>
</div> 


<div class="col-2">
      <div class="p-3">
      <div class="card text-bg-primary mb-3" style="width: 200px">
        <div class="card-header">Informacion</div>
        <div class="card-body">
            <p class="card-text">Valor apuesta: $ <?php  echo $ValorApuesta?><br><br>Fecha limite: 12/10<br><hr size="2px" color="black"/> Apostadores: <?php echo $Cantidad3y4 ?> <br><br>Premio: $ <?php echo $Cantidad3y4*350?></p>
        </div>
        </div>
      </div>
</div>

    <div class="d-grid gap-2">
    <button type="submit" class="btn btn-outline-success" name= "apostar3y4" id= "apostar3y4" >Apostar Fecha 3 y 4</button>
    </div>
</form>

<hr size="8px" color="black" />


<?php include("apuestaEliminatoria.php");?>
    </body>
   
    </html>

    