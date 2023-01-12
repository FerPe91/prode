<?php
include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');

$Apostadores= [];
$Puntajes = [];

$Apostadores=cargarApostadores("fecha1y2", $Apostadores);
$Puntajes=cargarPuntajes("fecha1y2", $Puntajes, $Apostadores);
?>

<div class="container text-center">
  <div class="row g-2">
        <div class="col-4">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Fecha 1 y 2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                <table id="table_id" class="display">
                        <thead>
                            <tr>
                            <th>Usuario</th>
                            <th>Puntaje</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0; $i<count($Apostadores); $i++) {?>
                            <tr class="table-info">
                                    <td><?php echo $Apostadores[$i]; ?></td>
                                    <td><?php echo  $Puntajes[$i]; ?></td>   
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


           


<script>
$(document).ready( function () {
    $('#table_id' ).DataTable({
        "pageLength": 10,
        
        "searching": false,
            "lengthChange": false,
            "info": false,
            "pagingType": "full",
            "order": [1, 'desc'],
    })    
} );


</script>




