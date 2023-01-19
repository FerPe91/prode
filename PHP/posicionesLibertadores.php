<?php
include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');


$ApostadoresGA= [];
$PuntajesGA = [];
$ApostadoresGB= [];
$PuntajesGB = [];
$ApostadoresGC= [];
$PuntajesGC = [];
$ApostadoresGD= [];
$PuntajesGD = [];
$ApostadoresGE= [];
$PuntajesGE = [];
$ApostadoresGF= [];
$PuntajesGF = [];
$ApostadoresGG= [];
$PuntajesGG = [];
$ApostadoresGH= [];
$PuntajesGH = [];

$ApostadoresGA=cargarApostadores("apuesta_libertadores", "GrupoA", $ApostadoresGA);
$PuntajesGA=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoA", $PuntajesGA, $ApostadoresGA);

$ApostadoresGB=cargarApostadores("apuesta_libertadores", "GrupoB", $ApostadoresGB);
$PuntajesGB=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoB", $PuntajesGB, $ApostadoresGB);

$ApostadoresGC=cargarApostadores("apuesta_libertadores", "GrupoC", $ApostadoresGC);
$PuntajesGC=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoC", $PuntajesGC, $ApostadoresGC);

$ApostadoresGD=cargarApostadores("apuesta_libertadores", "GrupoD", $ApostadoresGD);
$PuntajesGD=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoD", $PuntajesGD, $ApostadoresGD);

$ApostadoresGE=cargarApostadores("apuesta_libertadores", "GrupoE", $ApostadoresGE);
$PuntajesGE=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoE", $PuntajesGE, $ApostadoresGE);

$ApostadoresGF=cargarApostadores("apuesta_libertadores", "GrupoF", $ApostadoresGF);
$PuntajesGF=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoF", $PuntajesGF, $ApostadoresGF);

$ApostadoresGG=cargarApostadores("apuesta_libertadores", "GrupoG", $ApostadoresGG);
$PuntajesGG=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoG", $PuntajesGG, $ApostadoresGG);

$ApostadoresGH=cargarApostadores("apuesta_libertadores", "GrupoH", $ApostadoresGH);
$PuntajesGH=cargarPuntajesPorFecha("apuesta_libertadores", "resultados_libertadores", "GrupoH", $PuntajesGH, $ApostadoresGH);


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/styleText.css">
</head>
<body style= "background-image: url('../img/fondoLiber.png'); background-size: cover">
<div class="title">
 <h1>Copa Libertadores - Fase de grupo</h1>
</div>

<div class="container px-4 text-center" >
  <div class="row gx-5" >
    <div class="col-6">
    <div class="p-3">
    <div class="accordion" id="accordionExample" >
            <div class="accordion-item" >
                <h2 class="accordion-header" id="headingOne" >
                <button class="accordion-button collapsed" style="background-color:#b0c4de" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  GRUPO A
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGA']) ?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGA); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGA[$i]; ?></td>
                                                <td><?php echo  $PuntajesGA[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" style="background-color: #b8cae1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                GRUPO B
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGB'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGB); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGB[$i]; ?></td>
                                                <td><?php echo  $PuntajesGB[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" style="background-color: #c0d0e5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                GRUPO C
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGC'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGC); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGC[$i]; ?></td>
                                                <td><?php echo  $PuntajesGC[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f4">
                <button class="accordion-button collapsed" style="background-color:  #c8d6e8" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                GRUPO D
                </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="f4" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGD'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGD); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGD[$i]; ?></td>
                                                <td><?php echo  $PuntajesGD[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f5">
                <button class="accordion-button collapsed" style="background-color: #d0dceb" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                GRUPO E
                </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="f5" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGE'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGE); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGE[$i]; ?></td>
                                                <td><?php echo  $PuntajesGE[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f6">
                <button class="accordion-button collapsed" style="background-color:#d8e2ee" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                GRUPO F
                </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="f6" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGF'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGF); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGF[$i]; ?></td>
                                                <td><?php echo  $PuntajesGF[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f7">
                <button class="accordion-button collapsed" style="background-color:  #dfe7f2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                GRUPO G
                </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="f7" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGG'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGG); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGG[$i]; ?></td>
                                                <td><?php echo  $PuntajesGG[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f8">
                <button class="accordion-button collapsed" style="background-color: #e7edf5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                GRUPO H
                </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="f8" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioGH'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>                          
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($ApostadoresGH); $i++) {?>
                                        <tr class="table-info">
                      
                                                <td><?php echo $ApostadoresGH[$i]; ?></td>
                                                <td><?php echo  $PuntajesGH[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
       
        </div>
        </div>
    
    </div>
    
  </div>
</div>
</body>       


<script>
$(document).ready( function () {
    $('#table_id, #table_id2' ).DataTable({
       
        "pageLength": 8,
        "searching": false,
            "lengthChange": false,
            "info": false,
            "pagingType": "full",
  
         
            "order": [1, 'desc'],
          
            
    }) 
} );
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>

<script src="../js\simplyCountdown.min.js"></script>
<script src="../js\cuentaRegresivaLibertadores.js"></script>
