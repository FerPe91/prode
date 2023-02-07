<?php
include("../configuracion/cabecera.php");
require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');


$Apostadores1= [];
$Puntajes1 = [];
$ApostadoresTotal= [];
$PuntajesTotal = [];



$Apostadores1=cargarApostadores("apuesta_torneoarg", "fecha1", $Apostadores1);
$Puntajes1=cargarPuntajesPorFecha("apuesta_torneoarg", "resultados_torneoarg", "fecha1", $Puntajes1, $Apostadores1);

$ApostadoresTotal=cargarApostadores("apuesta_torneoarg", "todo", $ApostadoresTotal);
$PuntajesTotal=cargarPuntajesTotal("apuesta_torneoarg", $PuntajesTotal, $ApostadoresTotal);

//////////CHAT/////////////////
$UsuarioMensaje= [];
$Mensaje = [];
$FechaMensaje = [];
$UsuarioMensaje=UsuarioMensaje("chat_torneoarg", $UsuarioMensaje);
$Mensaje=Mensaje("chat_torneoarg", $Mensaje);
$FechaMensaje=FechaMensaje("chat_torneoarg", $FechaMensaje);
/////////////////////////

?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="../CSS/styleApuestaTorneoArgen.css">
</head>

<body style= "background-image: url('../img/fondoArg.png'); background-size: cover">

<div class="col-10 container-fluid">
    <div class="word">
	<span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>T</span><span>o</span><span>r</span><span>n</span><span>e</span><span>o</span><span>&nbsp;</span><span>A</span><span>r</span><span>g</span><span>e</span><span>n</span><span>t</span><span>i</span><span>n</span><span>o</span> </div>
    </div>

<div class="container px-4 text-center" >
  <div class="row gx-5" >
    <div class="col-6" id="tablas">
    <div class="p-3">
    <div class="accordion" id="accordionExample" >
            <div class="accordion-item" >
                <h2 class="accordion-header" id="headingOne" >
                <button class="accordion-button collapsed" style="background-color:#FFE4B5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                   Fecha 1 
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioArg'])?></h3> </div>
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
                
            <!-- <div class="accordion-item">
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
        </div> -->
        <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" style="background-color: #ffe7bc" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Tabla Torneo
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body"style="background-color:Cornsilk">
                <div style="background-color:silver"><h3>Premio acumulado: $ <?php echo($_SESSION['premioTotalArg'])?></h3> </div>
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
    <div class="col-6" id="tablas">
    <div class="p-3">

    <div class="card" style="border-radius: 1%;">
          <div
            class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
            style="border-top-left-radius: 1%; border-top-right-radius: 1%;">
            <i class="fas fa-angle-left"></i>
            <p class="mb-0 fw-bold">CHAT  </p>
            <i class="fas fa-times"></i>
          </div>
          <table id="table_id3" class="display" >
                                    <tbody>
                                    <?php for($i=count($UsuarioMensaje)-1; $i>=0; $i--) {?>
                                        <tr>
                                                <td><?php echo $FechaMensaje[$i]; ?> hs</td>
                                                <td><?php echo $UsuarioMensaje[$i];?> : <?php echo $Mensaje[$i];?></td>
                                        </tr>
                                        <?php  }   ?>            
                                    </tbody>
                </table>         
    </div>               
    </div>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Escribir un mensaje</button>
    </div>
  </div>
</div>
</body>        

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                        <div class="mb-3">
                <label fclass="form-label">el mensaje no debe superar los 150 caracteres.</label>
                        </div>
                            <div class="mb-3">
                            <input class="form-control" placeholder="escriba aqui" required id="MensajeTorneoArg" name="MensajeTorneoArg" rows="4"></input> 
                            </div>
                        
                            <button type="submit" style="margin:1%" name="cargarMensajeTorneoArg" id="cargarMensajeTorneoArg" class="btn btn-primary">Enviar</button>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    

<script>
$(document).ready( function () {
    $('#table_id, #table_id2' ).DataTable({
       
        "pageLength": 8,
        "searching": false,
            "lengthChange": false,
            "info": false,

            "order": [1, 'desc'],
                    
    }) 
} );

</script>

<script>
$(document).ready( function () {
    $('#table_id3' ).DataTable({
        "pageLength": 5,
        "searching": false,
        "lengthChange": false,
        "info": false,
        "order": false,

        columnDefs: [
    {targets: 1,
    className: 'dt-body-left',
    } ]
   
    }) 
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>


<?php if (isset($_POST["cargarMensajeTorneoArg"])){

enviarMensaje ("chat_torneoarg", "MensajeTorneoArg"); 

} ?> 
