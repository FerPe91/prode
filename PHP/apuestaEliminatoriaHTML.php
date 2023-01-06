<?php include("../configuracion/cabecera.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>pagina prueba</title>
</head>
<body>
<div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">
      <form method="POST">
    <div>
    <div class="p-3 mb-2 bg-success text-white">Fecha 1</div>        
    <input type="hidden" class="form-control" value= "f1" name="fecha" id="fecha" >
        <table class="table table-success table-striped">
        
            <thead>
                <tr>
                  
                  <th>Equipo</th>
                  <th>Local</th>
                  <th>Empate</th>
                  <th>Visitante</th>
                  <th>Equipo</th>
                </tr>
              </thead>
         <tbody>
                <tr>
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p1" id="p1"required></td>
                    <td><input type="radio" value="E" name="p1" id="p1"required></td>
                    <td><input type="radio" value="V" name="p1" id="p1"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p2"id="p2"required></td>
                    <td><input type="radio" value="E" name="p2"id="p2"required></td>
                    <td><input type="radio" value="V" name="p2" id="p2"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p3" id="p3"required></td>
                    <td><input type="radio" value="E" name="p3" id="p3"required></td>
                    <td><input type="radio" value="V" name="p3" id="p3"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p4" id="p4"required></td>
                    <td><input type="radio" value="E" name="p4" id="p4"required></td>
                    <td><input type="radio" value="V" name="p4" id="p4"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p5" id="p5"required></td>
                    <td><input type="radio" value="E" name="p5" id="p5"required></td>
                    <td><input type="radio" value="V" name="p5" id="p5"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        <!-- <input type="hidden" class="form-control" value= "usuario_nm" name="usuario" id="usuario" > -->
        <div class="bg-success p-2 text-dark bg-opacity-10">
        <button type="submit" class="btn btn-primary" name= "accion">Apostar</button>
        </div>
        
    </div>
</form>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3">
        <form method="POST">
    <div>
            <p>Fecha 1</p> <input type="hidden" class="form-control" value= "f1" name="fecha" id="fecha" >
        <table class="table table-success table-striped">
        
            <thead>
                <tr>
                  
                  <th>Equipo</th>
                  <th>Local</th>
                  <th>Empate</th>
                  <th>Visitante</th>
                  <th>Equipo</th>
                </tr>
              </thead>
         <tbody>
                <tr>
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p1" id="p1"required></td>
                    <td><input type="radio" value="E" name="p1" id="p1"required></td>
                    <td><input type="radio" value="V" name="p1" id="p1"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p2"id="p2"required></td>
                    <td><input type="radio" value="E" name="p2"id="p2"required></td>
                    <td><input type="radio" value="V" name="p2" id="p2"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p3" id="p3"required></td>
                    <td><input type="radio" value="E" name="p3" id="p3"required></td>
                    <td><input type="radio" value="V" name="p3" id="p3"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p4" id="p4"required></td>
                    <td><input type="radio" value="E" name="p4" id="p4"required></td>
                    <td><input type="radio" value="V" name="p4" id="p4"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p5" id="p5"required></td>
                    <td><input type="radio" value="E" name="p5" id="p5"required></td>
                    <td><input type="radio" value="V" name="p5" id="p5"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        <!-- <input type="hidden" class="form-control" value= "usuario_nm" name="usuario" id="usuario" > -->
        <button type="submit" class="btn btn-primary" name= "accion">Apostar</button>
        
    </div>
</form>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3">
        <form method="POST">
    <div>
            <p>Fecha 1</p> <input type="hidden" class="form-control" value= "f1" name="fecha" id="fecha" >
        <table class="table table-success table-striped">
        
            <thead>
                <tr>
                  
                  <th>Equipo</th>
                  <th>Local</th>
                  <th>Empate</th>
                  <th>Visitante</th>
                  <th>Equipo</th>
                </tr>
              </thead>
         <tbody>
                <tr>
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p1" id="p1"required></td>
                    <td><input type="radio" value="E" name="p1" id="p1"required></td>
                    <td><input type="radio" value="V" name="p1" id="p1"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p2"id="p2"required></td>
                    <td><input type="radio" value="E" name="p2"id="p2"required></td>
                    <td><input type="radio" value="V" name="p2" id="p2"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p3" id="p3"required></td>
                    <td><input type="radio" value="E" name="p3" id="p3"required></td>
                    <td><input type="radio" value="V" name="p3" id="p3"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p4" id="p4"required></td>
                    <td><input type="radio" value="E" name="p4" id="p4"required></td>
                    <td><input type="radio" value="V" name="p4" id="p4"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p5" id="p5"required></td>
                    <td><input type="radio" value="E" name="p5" id="p5"required></td>
                    <td><input type="radio" value="V" name="p5" id="p5"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        <!-- <input type="hidden" class="form-control" value= "usuario_nm" name="usuario" id="usuario" > -->
        <button type="submit" class="btn btn-primary" name= "accion">Apostar</button>
        
    </div>
</form>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3">
        <form method="POST">
    <div>
            <p>Fecha 1</p> <input type="hidden" class="form-control" value= "f1" name="fecha" id="fecha" >
        <table class="table table-success table-striped">
        
            <thead>
                <tr>
                  
                  <th>Equipo</th>
                  <th>Local</th>
                  <th>Empate</th>
                  <th>Visitante</th>
                  <th>Equipo</th>
                </tr>
              </thead>
         <tbody>
                <tr>
                  
                    <td>ARG</td>
                    <td><input type="radio" value="L" name="p1" id="p1"required></td>
                    <td><input type="radio" value="E" name="p1" id="p1"required></td>
                    <td><input type="radio" value="V" name="p1" id="p1"required></td>
                    <td>BRA</td>
                </tr>
                <tr>
                 
                    <td>URU</td>
                    <td><input type="radio" value="L" name="p2"id="p2"required></td>
                    <td><input type="radio" value="E" name="p2"id="p2"required></td>
                    <td><input type="radio" value="V" name="p2" id="p2"required></td>
                    <td>ECU</td>
                </tr>
                <tr>
                  
                    <td>COL</td>
                    <td><input type="radio" value="L" name="p3" id="p3"required></td>
                    <td><input type="radio" value="E" name="p3" id="p3"required></td>
                    <td><input type="radio" value="V" name="p3" id="p3"required></td>
                    <td>CHI</td>
                </tr>
                <tr>
                    
                    <td>PER</td>
                    <td><input type="radio" value="L" name="p4" id="p4"required></td>
                    <td><input type="radio" value="E" name="p4" id="p4"required></td>
                    <td><input type="radio" value="V" name="p4" id="p4"required></td>
                    <td>BOL</td>
                </tr>
                <tr>
                    
                    <td>VEN</td>
                    <td><input type="radio" value="L" name="p5" id="p5"required></td>
                    <td><input type="radio" value="E" name="p5" id="p5"required></td>
                    <td><input type="radio" value="V" name="p5" id="p5"required></td>
                    <td>PAR</td>
                </tr>
        </table>
        <!-- <input type="hidden" class="form-control" value= "usuario_nm" name="usuario" id="usuario" > -->
        <button type="submit" class="btn btn-primary" name= "accion">Apostar</button>
        
    </div>
</form>
      </div>
    </div>
  </div>
</div>

<?php include("apuestaEliminatoria.php");?>
    </body>
   
    </html>