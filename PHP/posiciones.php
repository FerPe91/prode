<?php include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');?>

<?php


function cargarApostadores($fechas, $Apostadores){
    require ('../configuracion/conexion.php');
    $Usuarios = mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias WHERE fecha = '$fechas'");
    while($totalUsuario = mysqli_fetch_array($Usuarios)){
        array_push($Apostadores, $totalUsuario["usuario"]);
    };
    return $Apostadores;
}

function cargarPuntajes ($fechas, $Puntajes, $Apostadores){
    require ('../configuracion/conexion.php');
    for($i=0; $i<count($Apostadores); $i++) {
        
        $partido1=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p1 = resultado_eliminatorias.p1 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos = mysqli_num_rows($partido1);
        $partido2=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p2 = resultado_eliminatorias.p2 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido2);
        $partido3=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p3 = resultado_eliminatorias.p3 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido3);
        $partido4=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p4 = resultado_eliminatorias.p4 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido4);
        $partido5=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p5 = resultado_eliminatorias.p5 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido5);
        $partido6=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p6 = resultado_eliminatorias.p6 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido6);
        $partido7=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p7 = resultado_eliminatorias.p7 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido7);
        $partido8=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p8 = resultado_eliminatorias.p8 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido8);
        $partido9=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p9 = resultado_eliminatorias.p9 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido9);
        $partido10=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$Apostadores[$i]' and apuesta_eliminatorias.p10 = resultado_eliminatorias.p10 and apuesta_eliminatorias.fecha = '$fechas'");
        $SumaPuntos += mysqli_num_rows($partido10);
    
        array_push($Puntajes, $SumaPuntos*5);
    };
    return $Puntajes;
};

$Apostadores1 = [];
$Apostadores2 = [];
$Puntajes1 = [];
$Puntajes2 = [];

////faltan definir mas////////////////
$Apostadores1=cargarApostadores("fecha1y2", $Apostadores1);
$Puntajes1=cargarPuntajes("fecha1y2", $Puntajes1, $Apostadores1);
$Apostadores2=cargarApostadores("fecha3y4", $Apostadores2);
$Puntajes2=cargarPuntajes("fecha3y4", $Puntajes2, $Apostadores2);
/* $Apostadores3=cargarApostadores("fecha5y6", $Apostadores3);
$Puntajes4=cargarPuntajes("fecha5y6", $Puntajes4, $Apostadores4);
$Apostadores5=cargarApostadores("fecha7y8", $Apostadores5);
$Puntajes5=cargarPuntajes("fecha7y8", $Puntajes5, $Apostadores5); */




?>

<div class="container text-center">
  <div class="row g-2">
        <div class="col-4">
            <div class="p-3">
            <table id="table_id" class="display">
                <h4> Fecha 1 y 2 </h4>
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
        <div class="col-4">
            <div class="p-3">
            <table id="table_id1" class="display">
                <h4> Fecha 3 y 4</h4>
            <thead>
                <tr>
                <th>Usuario</th>
                <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i<count($Apostadores2); $i++) {?>
                <tr class="table-info">
                        <td><?php echo $Apostadores2[$i]; ?></td>
                        <td><?php echo  $Puntajes2[$i]; ?></td>   
                </tr>
                <?php  }   ?>            
            </tbody>
            </table> 
            </div>
        </div>

        <div class="col-4">
            <div class="p-3">
            <table id="table_id" class="display">
                <h4> Fecha 5 y 6</h4>
            <thead>
                <tr>
                <th>Usuario</th>
                <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i<count($Apostadores2); $i++) {?>
                <tr class="table-info">
                        <td><?php echo $Apostadores2[$i]; ?></td>
                        <td><?php echo  $Puntajes2[$i]; ?></td>   
                </tr>
                <?php  }   ?>            
            </tbody>
        </table> 
        </div>
    </div>      
        <div class="col-4">
            <div class="p-3">
            <table id="table_id1" class="display">
                <h4> Fecha 3 y 4</h4>
            <thead>
                <tr>
                <th>Usuario</th>
                <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i<count($Apostadores2); $i++) {?>
                <tr class="table-info">
                        <td><?php echo $Apostadores2[$i]; ?></td>
                        <td><?php echo  $Puntajes2[$i]; ?></td>   
                </tr>
                <?php  }   ?>            
            </tbody>
            </table> 
            </div>
        </div>

        <div class="col-4">
            <div class="p-3">
            <table id="table_id" class="display">
                <h4> Fecha 1 y 2</h4>
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
        <div class="col-4">
            <div class="p-3">
            <table id="table_id1" class="display">
                <h4> Fecha 3 y 4</h4>
            <thead>
                <tr>
                <th>Usuario</th>
                <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i<count($Apostadores2); $i++) {?>
                <tr class="table-info">
                        <td><?php echo $Apostadores2[$i]; ?></td>
                        <td><?php echo  $Puntajes2[$i]; ?></td>   
                </tr>
                <?php  }   ?>            
            </tbody>
            </table> 
            </div>
        </div>
    </div>
</div>




<script>
$(document).ready( function () {
    $('#table_id, #table_id1' ).DataTable({
        "pageLength": 10,
        
        "searching": false,
            "lengthChange": false,
            "info": false,
            "pagingType": "full",
            "order": [1, 'desc'],
    })    
} );
</script>


