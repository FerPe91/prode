<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="C:\wamp\www\apuestasDeportivas\js\jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>
    <script src="C:\wamp\www\apuestaDeportiva\node_modules\sweetalert2\dist\sweetalert2.all.js"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-image: url(https://images3.alphacoders.com/212/212835.jpg);">

  
<nav class="navbar navbar-expand-lg sticky-top" style="background-color:  #e3f2fdc2;">
    <a class="navbar-brand" href="#">
        <img src="https://1.bp.blogspot.com/-s-PWMumERn8/XsRRBilg2eI/AAAAAAABa8I/pQT1CnbA-sgfOvQvhxAeGx2n8RW3y3HLgCK4BGAsYHg/d/LPF.png" alt="Bootstrap" width="70" height="64">PRODE NACIONAL
    </a>
</nav>
    
  <div class="container col-4 border rounded border-primary p-3 mt-5 " style="background-color: aliceblue;">
    <div class="col-12 pb-3">
      <h1 class="text-primary border-bottom ">Registro de usuario</U></h1>
    </div>
    
    <form class="row g-3" method="POST">
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name= "apellido" id="apellido" required placeholder="Ejemplo: Martinez...">
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Ejemplo: Juan..." > 
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="dni" class="form-label">Dni</label>
        <input type="number" class="form-control" name= "dni" id="dni" placeholder="sin puntos ni espacios" required>
      </div>
      
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" name= "telefono" id="telefono" required placeholder="xxxx-xxxxx">
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="usuario class="form-label">Usuario</label>
        <input type="text" class="form-control" name= "usuario" id="usuario" placeholder="debe tener mas de 6 caracteres" required>
      </div>
  
      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="contraseña" class="form-label">Clave</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" required required placeholder="solo para usted">          
      </div>

      <div class="input-group input-group mb-3">
        <label class="input-group-text" id="inputGroup-sizing-default" for="Rcontraseña" class="form-label">Repetir Clave</label >
        <input type="password" class="form-control" name="Rcontraseña" id="Rcontraseña" required placeholder="repita su contraseña">                       
      </div>

      <div class="input-group input-group d-flex justify-content-end mb-6">
        <div class="col-12 input-group-text d-flex justify-content-between" id="inputGroup-sizing-default" class="form-check">
          <button type="button" class="btn btn-primary" onclick="location.href='../index.php'">VOLVER</button>
          <button type="submit" class="btn btn-success" name="accion" >CONFIRMAR</button>
        </div>
      </div>      
    </form>
  </div>

<?php

require ('../configuracion/conexion.php');
require ('../funciones/funciones.php');
if (isset($_POST["accion"])){
  registrarUsuario();
};
?>


      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
    
    
       