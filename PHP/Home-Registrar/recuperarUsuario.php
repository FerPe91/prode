
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="C:\wamp\www\apuestasDeportivas\js\jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd00;">
        <a class="navbar-brand" href="#">
            <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE DINERO FICTICIO
        </a>
    </nav>
    
    
    <div class="container">
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
                            
                            <div class="modal-footer">
                            <button  class="btn btn-secondary" onclick="location.href='../../index.php'">Volver</button>
                            <button type="submit" name="aceptar" id="aceptar" class="btn btn-primary" >Aceptar</button>
                            <button type="button" class="btn btn-primary" disabled id="recupera">Recupera</button>
                        </div>
                        </form>

        </div>
    </div>

</body>


<div class="modal fade" id="modalPregunta" tabindex="-1" aria-labelledby="modalPreguntaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content w-75 rounded-4 p-2 mx-auto ">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalPreguntaLabel">Recuperacion de contraseña</h5>                      
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST">
                <div class="mb-3">
                    <label  class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="clave" id="clave" required>
                </div>
                <button type="submit" class="btn btn-primary" name="accion" >Entrar</button>
                <button type="button" class="btn btn-primary" onclick="location.href='PHP/Home-Registrar/registrar.php'">Registrar</button>
                
            </form> 
                    </div>
                </div>
            </div>
        </div>
</html>

<?php 
require('../../configuracion/conexion.php');
require ('../../funciones/funciones.php');

if (isset($_POST["aceptar"])){
 recuperarUsuario();
   
?>

<script>
