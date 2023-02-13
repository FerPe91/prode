<?php
include("../../configuracion/cabecera.php");
include("../../configuracion/menuDesplegable.php");
require ('../../configuracion/conexion.php');
require ('../../funciones/funciones.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../CSS/styleApuestaEliminatorias.css">

</head>

<body style= "background-image: url('../../img/fondo.png'); background-size: cover">  
<h1 data-shadow='Eliminatorias'>Eliminatorias</h1>

<body style= "background-image: url('../../img/fondo.png'); background-size: cover">


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
                <th>FECHAS</th>
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
                <th>PUNTAJE</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#f1y2" aria-controls="f1y2">
                        Fecha 1 y 2
                        </button></td>
                        <?php for($i=0; $i<count($_SESSION['Resultados1ELI']); $i++) {
                            if ( $_SESSION['Resultados1ELI'][$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $_SESSION['Pronostico1ELI'][$i] ?></td>
                            <?php  }elseif( $_SESSION['Pronostico1ELI'][$i] == $_SESSION['Resultados1ELI'][$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $_SESSION['Pronostico1ELI'][$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $_SESSION['Pronostico1ELI'][$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>   
                            <td><?php echo $_SESSION['Pronostico1ELI'][10] ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="f1y2" aria-labelledby="f1y2Label" style="background-color: DarkGray">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Fecha 1 y 2</h3>
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
                        <td><?php echo  $_SESSION['Resultados1ELI'][0]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p2</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][1]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p3</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][2]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p4</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][3]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p5</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][4]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p6</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][5]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p7</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][6]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p8</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][7]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p9</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][8]; ?></td>
                    </tr>
                    <tr class="table-info">
                        <td>p10</td>
                        <td>Boca - River</td>
                        <td><?php echo  $_SESSION['Resultados1ELI'][9]; ?></td>
                    </tr>
                </tbody>
            </table>                
            </div>
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
            { "className": "text-center", "sortable": false, "width": "10%", "targets": 11 },
       
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


