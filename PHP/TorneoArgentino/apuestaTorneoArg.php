<?php 
include("../../configuracion/cabecera.php");
include("../../configuracion/menuDesplegable.php");
require ('../../configuracion/conexion.php');
require ('../../funciones/funciones.php');


$ValorApuesta= $_SESSION['valorApuestaArgentina'];
$NombreDeFecha = $_SESSION['nombreFechaArgentina'];
$CantidadApostadoresArg= $_SESSION['premioArg']/($ValorApuesta*70/100);

$CantidadApostadoresTotalArg= $_SESSION['premioTotalArg']/(2000*70/100);

?>


<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="../../CSS/styleApuestaTorneoArgen.css">
</head>


<body style= "background-image: url('../../img/fondoArg.png'); background-size: cover">

<div class="col-10 container-fluid">
    <div class="word" id="titulo">
	<span>T</span><span>o</span><span>r</span><span>n</span><span>e</span><span>o</span><span>&nbsp;</span><span>A</span><span>r</span><span>g</span><span>e</span><span>n</span><span>t</span><span>i</span><span>n</span><span>o</span><span>&nbsp;</span><span>F</span><span>e</span><span>c</span><span>h</span><span>a</span><span>&nbsp;</span><span>5</span>
    </div>
    </div>

<div class="container text-center">
  <div class="row g-2">
    <div class="col-5" id="tablas">
      <div class="p-3">
      <form method="POST">
        <div>
        <table class="table table-danger table-striped">
        
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
                
                <td><?php echo $_SESSION['equipo1TA']?></td>
                <td><input type="radio" value="L" name="p1" id="p1"required></td>
                <td><input type="radio" value="E" name="p1" id="p1"required></td>
                <td><input type="radio" value="V" name="p1" id="p1"required></td>
                <td><?php echo $_SESSION['equipo2TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo3TA']?></td>
                <td><input type="radio" value="L" name="p2"id="p2"required></td>
                <td><input type="radio" value="E" name="p2"id="p2"required></td>
                <td><input type="radio" value="V" name="p2" id="p2"required></td>
                <td><?php echo $_SESSION['equipo4TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo5TA']?></td>
                <td><input type="radio" value="L" name="p3" id="p3"required></td>
                <td><input type="radio" value="E" name="p3" id="p3"required></td>
                <td><input type="radio" value="V" name="p3" id="p3"required></td>
                <td><?php echo $_SESSION['equipo6TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo7TA']?></td>
                <td><input type="radio" value="L" name="p4" id="p4"required></td>
                <td><input type="radio" value="E" name="p4" id="p4"required></td>
                <td><input type="radio" value="V" name="p4" id="p4"required></td>
                <td><?php echo $_SESSION['equipo8TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo9TA']?></td>
                <td><input type="radio" value="L" name="p5" id="p5"required></td>
                <td><input type="radio" value="E" name="p5" id="p5"required></td>
                <td><input type="radio" value="V" name="p5" id="p5"required></td>
                <td><?php echo $_SESSION['equipo10TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo11TA']?></td>
                <td><input type="radio" value="L" name="p6" id="p6"required></td>
                <td><input type="radio" value="E" name="p6" id="p6"required></td>
                <td><input type="radio" value="V" name="p6" id="p6"required></td>
                <td><?php echo $_SESSION['equipo12TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo13TA']?></td>
                <td><input type="radio" value="L" name="p7" id="p7"required></td>
                <td><input type="radio" value="E" name="p7" id="p7"required></td>
                <td><input type="radio" value="V" name="p7" id="p7"required></td>
                <td><?php echo $_SESSION['equipo14TA']?></td>
            </tr>
           </table>
            </div>
        </div>
</div>
    <div class="col-5" id="tablas">
        <div class="p-3">
   
        <div>    
        <table class="table table-danger table-striped">
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
                
                <td><?php echo $_SESSION['equipo15TA']?></td>
                <td><input type="radio" value="L" name="p8" id="p8"required></td>
                <td><input type="radio" value="E" name="p8" id="p8"required></td>
                <td><input type="radio" value="V" name="p8" id="p8"required></td>
                <td><?php echo $_SESSION['equipo16TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo17TA']?></td>
                <td><input type="radio" value="L" name="p9"id="p9"required></td>
                <td><input type="radio" value="E" name="p9"id="p9"required></td>
                <td><input type="radio" value="V" name="p9" id="p9"required></td>
                <td><?php echo $_SESSION['equipo18TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo19TA']?></td>
                <td><input type="radio" value="L" name="p10" id="p10"required></td>
                <td><input type="radio" value="E" name="p10" id="p10"required></td>
                <td><input type="radio" value="V" name="p10" id="p10"required></td>
                <td><?php echo $_SESSION['equipo20TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo21TA']?></td>
                <td><input type="radio" value="L" name="p11" id="p11"required></td>
                <td><input type="radio" value="E" name="p11" id="p11"required></td>
                <td><input type="radio" value="V" name="p11" id="p11"required></td>
                <td><?php echo $_SESSION['equipo22TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo23TA']?></td>
                <td><input type="radio" value="L" name="p12" id="p12"required></td>
                <td><input type="radio" value="E" name="p12" id="p12"required></td>
                <td><input type="radio" value="V" name="p12" id="p12"required></td>
                <td><?php echo $_SESSION['equipo24TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo25TA']?></td>
                <td><input type="radio" value="L" name="p13" id="p13"required></td>
                <td><input type="radio" value="E" name="p13" id="p13"required></td>
                <td><input type="radio" value="V" name="p13" id="p13"required></td>
                <td><?php echo $_SESSION['equipo26TA']?></td>
            </tr>
            <tr>
                
                <td><?php echo $_SESSION['equipo27TA']?></td>
                <td><input type="radio" value="L" name="p14" id="p14"required></td>
                <td><input type="radio" value="E" name="p14" id="p14"required></td>
                <td><input type="radio" value="V" name="p14" id="p14"required></td>
                <td><?php echo $_SESSION['equipo28TA']?></td>
            </tr>
           
        </table>
        </div>
        </div>
    </div>

    <div class="col-2" id="info">
      <div class="p-3">
      <div class="card text-bg-primary mb-3" style="width: 150%">
        <div class="card-header">Informacion</div>
        <div class="card-body">
            <p class="card-text">Valor apuesta: $ <?php echo $ValorApuesta?><br>La apuesta finaliza en: <div id="reloj"></div><hr size="1%" color="black"/> Apostadores: <?php echo $CantidadApostadoresArg ?><br>Premio: $ <?php echo $_SESSION['premioArg']?></p>
        </div>
        </div>
      </div>
</div>
</div>

<div class="container text-center">
<div class="row g-2">
    <div class="col-10" id="boton">
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-danger" name= "apostarArg" id= "apostarArg">Apostar</button>
    </div>
    </div>
    </form>
    <div class="col-2" id="boton2">
    <button type="button" data-bs-toggle="modal" data-bs-target="#Todo" style="width: 125%; margin-left:15%; margin-top:-11%" class="btn btn-warning btn-lg">Voy por todo el torneo</button>
    </div>
    </div> 
</div>
</div>
  </body>
    </html>

    <!-- Modal -->
<div class="modal fade" id="Todo" tabindex="-1" aria-labelledby="TodoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TodoLabel">¡¡Participa por el premio mayor!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                           
                            <div class="mb-3">
                            Al finalizar el torneo quien haya sumado mas puntos entre todas las fechas se lleva el premio mas grande.<br>Valor de la apuesta $ 2000 (por unica vez)  
                            </div>
                            
                            <div class="modal-footer">
                            <form method="POST">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="todoArg" id="todoArg" class="btn btn-primary">Voy por todo</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>


    <?php  
  if (isset($_POST["apostarArg"])){ 
    cargarApuesta("apuesta_torneoarg", $NombreDeFecha, $ValorApuesta);
   
  }
  if (isset($_POST["todoArg"])){ 
    cargarApuesta("apuesta_torneoarg","todo","2000");

}?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="../../js\simplyCountdown.min.js"></script>
    <script src="../../js\cuentaRegresivaTorneo.js"></script>


    <script>
    const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
	span.addEventListener('click', (e) => {
		e.target.classList.add('active');
	});
	span.addEventListener('animationend', (e) => {
		e.target.classList.remove('active');
	});
	
	// Initial animation
	setTimeout(() => {
		span.classList.add('active');
	}, 750 * (idx+1))
});
</script>    

