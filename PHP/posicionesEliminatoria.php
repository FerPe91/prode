<?php
include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');


$Apostadores1= [];
$Puntajes1 = [];
$Apostadores2= [];
$Puntajes2 = [];
$ApostadoresTotal= [];
$PuntajesTotal = [];



$Apostadores1=cargarApostadores("fecha1y2", $Apostadores1);
$Puntajes1=cargarPuntajesPorFecha("fecha1y2", $Puntajes1, $Apostadores1);
$Apostadores2=cargarApostadores("fecha3y4", $Apostadores2);
$Puntajes2=cargarPuntajesPorFecha("fecha3y4", $Puntajes2, $Apostadores2);

$ApostadoresTotal=cargarApostadores("todo", $ApostadoresTotal);
$PuntajesTotal=cargarPuntajesTotal ($PuntajesTotal, $ApostadoresTotal);

?>
<body style= "background-image: url('../img/fondo.png'); background-size: cover">


<div class="container px-4 text-center" >
  <div class="row gx-5" >
    <div class="col">
    <div class="p-3">
    <div class="accordion" id="accordionExample" >
            <div class="accordion-item" >
                <h2 class="accordion-header" id="headingOne" >
                <button class="accordion-button collapsed" style="background-color:#FFE4B5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                   Fecha 1 y 2 
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premio'])?></h3> </div>
                <table id="table_id" class="display" >
                                    <thead>
                                        <tr>
                                        <th>Usuario</th>
                                        <th>Puntaje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($Apostadores1); $i++) {?>
                                        <tr class="table-info">
                                                <td><?php echo $Apostadores1[$i]; ?></td>
                                                <td><?php echo  $Puntajes1[$i]; ?></td>   
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                            </table> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" style="background-color: #ffe7bc" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Fecha 3 y 4
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                    <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" style="background-color: #ffe9c4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   Fecha 5 y 6
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f4">
                <button class="accordion-button collapsed" style="background-color: #ffeccb" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                Fecha 7 y 8
                </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="f4" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                    <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f5">
                <button class="accordion-button collapsed" style="background-color: #ffefd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                   Fecha 9 y 10
                </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="f5" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f6">
                <button class="accordion-button collapsed" style="background-color:#fff2da" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                Fecha 11 y 12
                </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="f6" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                    <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f7">
                <button class="accordion-button collapsed" style="background-color: #fff4e1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                   Fecha 13 y 14
                </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="f7" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f8">
                <button class="accordion-button collapsed" style="background-color: #fff7e9" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                Fecha 15 y 16
                </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="f8" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                    <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="f9">
                <button class="accordion-button collapsed" style="background-color: #fffaf0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                   Fecha 17 y 18
                </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="f9" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <strong>La fecha aun no ha comenzado</strong> 
                </div>
                </div>
            </div>
        </div>
        </div>
    
    </div>
            <div class="col">
            <div class="p-3">
            <div class="card text-bg mb-3" style="max-width: 30rem;background-color:MistyRose">
                <div class="card-header"><h2>Tabla general</h2></div>
                <div class="card-body">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioTotal'])?></h3> </div>
                    <table id="table_id2" class="display">
                                                <thead>
                                                    <tr>
                                                    <th>Usuario</th>
                                                    <th>Puntaje</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php for($i=0; $i<count($ApostadoresTotal); $i++) {?>
                                                    <tr class="table-info">
                                                            <td><?php echo $ApostadoresTotal[$i]; ?></td>
                                                            <td><?php echo  $PuntajesTotal[$i]; ?></td>   
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


