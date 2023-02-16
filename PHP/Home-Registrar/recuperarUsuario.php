
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js\sweetalert2.all.min.js"></script>
    <script src="js\sweetalert2.all.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js\jquery-3.5.1.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\bootstrap-collapse.js"></script>
    <link rel="stylesheet" href="../../CSS/styleRegistro.css">
</head>
<body style= "background-image: url('../../img/messi.png'); background-size: cover">
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd00;">
        <a class="navbar-brand" href="#">
            <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE DINERO FICTICIO
        </a>
    </nav>
    
    
    <div id="tablas"  class="container col-4 border rounded border-primary p-3 mt-5 " style="background-color: aliceblue; margin-left:60%">
        <div class="formulario ">
        <form method="POST">
            <div class="mb-3"> 
                <label for="dni" class="form-label">Ingrese su numero de Documento</label>
                <input type="number" class="form-control" name="dni" id="dni" required>
            </div>
            <div class="mb-3">
                <label for="fechaN" class="form-label">¿Cual es tu fecha de nacimiento?</label>
                <input type="date" class="form-control" name="fechaN" id="fechaN" required>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Ingrese su nueva contraseña</label>
                <input type="text" class="form-control" name="clave" id="clave" required>
            </div>
            
            <div class="col-12 input-group-text d-flex justify-content-between">
            <button  class="btn btn-secondary" onclick="location.href='../../index.php'">Volver</button>
            <button type="submit" name="aceptar" id="aceptar" class="btn btn-primary" >Aceptar</button>
            </div>
        
        </form>
        </div>
    </div>

</body>

</html>

<?php 
require('../../configuracion/conexion.php');
require ('../../funciones/funciones.php');

if (isset($_POST["aceptar"])){
recuperarUsuario();

}; 
?> 




