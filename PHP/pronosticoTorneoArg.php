<?php
include("../configuracion/cabecera.php");
include("menuDesplegable.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="../CSS/styleApuestaTorneoArgen.css">
</head>

<body style= "background-image: url('../img/fondoArg.png'); background-size: cover">

<div class="col-10 container-fluid">
    <div class="word" style="margin-bottom:20px" id="titulo">
	<span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>T</span><span>o</span><span>r</span><span>n</span><span>e</span><span>o</span><span>&nbsp;</span><span>A</span><span>r</span><span>g</span><span>e</span><span>n</span><span>t</span><span>i</span><span>n</span><span>o</span> </div>
    </div>
 

<div style="width:90%; margin:auto; border-radius: 15px">
    <div class="card">
          <div  
            class="card-header d-flex justify-content-between align-items-center p-3 bg-primary text-white border-bottom-0"
            style="border-top-left-radius: 1%; border-top-radius: 15px">
            <i class="fas fa-angle-left"></i>
            <p class="mb-0 fw-bold">Mis pronosticos realizados</p>
            <i class="fas fa-times"></i>
          </div>
          
          <table id="table" class="display">
            <thead >
                <tr >                          
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
                <th>P11</th>
                <th>P12</th>
                <th>P13</th>
                <th>P14</th>
                <th>PUNTAJE</th>
                </tr>
            </thead>
            <tbody>
                <tr> <!-- FECHA 5 -->
                        <td><button class="btn btn-light"  style="width:100%; padding:0px" data-bs-toggle="offcanvas" data-bs-target="#f5" aria-controls="f5">
                        Fecha 5
                        </button></td>
                        <?php for($i=0; $i<count($_SESSION['Resultados5TA']); $i++) {
                            if ( $_SESSION['Resultados5TA'][$i] == "-" ){  ?>
                                <td style="background-color:while"><?php echo $_SESSION['Pronostico5TA'][$i] ?></td>
                            <?php  }elseif( $_SESSION['Pronostico5TA'][$i] == $_SESSION['Resultados5TA'][$i] ){?>
                            <td style="background-color:yellow; border-radius: 20px"><?php echo $_SESSION['Pronostico5TA'][$i]; ?></td>
                            <?php  }else{?>
                                <td style="background-color:red; border-radius: 200px; "><?php echo $_SESSION['Pronostico5TA'][$i] ?></td>
                            <?php  }  ?>
                        <?php  }  ?>                
                        <td><?php echo $_SESSION['Pronostico5TA'][14] ?></td>
                 </tr>
                
            </tbody>
        </table> 
    </div>
</div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="f5" aria-labelledby="f5Label" style="background-color: DarkGray">
        <div class="offcanvas-header" >
            <h3 class="offcanvas-title" style="margin:auto" id="offcanvasScrollingLabel">Fecha 5</h3>
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
        <table id="table5" class="display" >
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
                    <td>Central Córdoba-Argentinos Jrs</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][0]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p2</td>
                    <td>Belgrano-Tigre</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][1]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p3</td>
                    <td>River-Arsenal</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][2]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p4</td>
                    <td>Racing-Lanús</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][3]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p5</td>
                    <td>Rosario Central-Godoy Cruz</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][4]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p6</td>
                    <td>Estudiantes LP-Sarmiento</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][5]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p7</td>
                    <td>San Lorenzo-Unión</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][6]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p8</td>
                    <td>Colón-Huracán</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][7]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p9</td>
                    <td>Barracas Central-Gimnasia</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][8]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p10</td>
                    <td>Instituto- Newells</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][9]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p11</td>
                    <td>Banfield-Independiente</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][10]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p12</td>
                    <td>Defensa y Justicia-Atlético Tucumán</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][11]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p13</td>
                    <td>Vélez-Boca</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][12]; ?></td>
                </tr>
                <tr class="table-info">
                    <td>p14</td>
                    <td>Platense-Talleres</td>
                    <td><?php echo  $_SESSION['Resultados5TA'][13]; ?></td>
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
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 11 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 12 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 13 },
            { "className": "text-center", "sortable": false, "width": "5%", "targets": 14 },
            { "className": "text-center", "sortable": false, "width": "10%", "targets": 15 },
       
            ]
            
            
    }) 
} );

$(document).ready( function () {
    $('#table5').DataTable({
        "pageLength": 12,
        "searching": false,
        "lengthChange": false,
        "paging": false, // elimina botones de ordenamiento de pagina
        "info": false,
        "order": false,
        
        columnDefs:[
            { "className": "text-center", "sortable": false, "width": "3%", "targets": 0 }, //sortable saca las fechas de ordenamiento de las columnas
            { "className": "text-center", "sortable": false, "width": "90%", "targets": 1},
            { "className": "text-center", "sortable": false, "width": "7%", "targets": 2 },
        ]
        
    }) 
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>


