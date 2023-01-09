<?php include("../configuracion/cabecera.php");?>
<?php

$Puntajes = [];
$Apostadores = [];
$Ordenar = [];

require ('../configuracion/conexion.php');

$Usuarios = mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias");

while($totalUsuario = mysqli_fetch_array($Usuarios)){

    $partido1=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p1 = resultado_eliminatorias.p1 ");
    $SumaPuntos = mysqli_num_rows($partido1);
    $partido2=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p2 = resultado_eliminatorias.p2 ");
    $SumaPuntos += mysqli_num_rows($partido2);
    $partido3=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p3 = resultado_eliminatorias.p3 ");
    $SumaPuntos += mysqli_num_rows($partido3);
    $partido4=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p4 = resultado_eliminatorias.p4 ");
    $SumaPuntos += mysqli_num_rows($partido4);
    $partido5=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p5 = resultado_eliminatorias.p5 ");
    $SumaPuntos += mysqli_num_rows($partido5);
    $partido6=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p6 = resultado_eliminatorias.p6 ");
    $SumaPuntos += mysqli_num_rows($partido6);
    $partido7=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p7 = resultado_eliminatorias.p7 ");
    $SumaPuntos += mysqli_num_rows($partido7);
    $partido8=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p8 = resultado_eliminatorias.p8 ");
    $SumaPuntos += mysqli_num_rows($partido8);
    $partido9=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p9 = resultado_eliminatorias.p9 ");
    $SumaPuntos += mysqli_num_rows($partido9);
    $partido10=mysqli_query($conexion,"SELECT * FROM apuesta_eliminatorias inner join resultado_eliminatorias on apuesta_eliminatorias.fecha = resultado_eliminatorias.fecha where apuesta_eliminatorias.usuario = '$totalUsuario[usuario]' and apuesta_eliminatorias.p10 = resultado_eliminatorias.p10 ");
    $SumaPuntos += mysqli_num_rows($partido10);

    array_push($Apostadores, $totalUsuario["usuario"]);
    array_push($Puntajes, $SumaPuntos*5);
};
?>

<div class="col-4">
    <table id="table_id" class="display">
        <h2> Eliminatorias </h2>
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
     



<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        "pageLength": 10,
        
        "searching": false,
            "lengthChange": false,
            "info": false,
            "pagingType": "full",
            "order": [1, 'desc'],
    })
       
} );

</script>