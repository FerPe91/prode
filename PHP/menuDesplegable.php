
<?php
require('../configuracion/conexion.php');

$nombreU=$_SESSION['nombreU'];
?>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color: #FC1111; color:white">
            <div class="offcanvas-header" >
                <h3 class="offcanvas-title" id="offcanvasScrollingLabel">Bienvenido <?php echo $nombreU ?> </h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Elige en cual competencia quieres jugar. Para que tu apuesta sea aceptada debes completar todos los partidos, realizarla antes del tiempo establecido y contar con el saldo suficiente. Ningun jugador puede hacer mas de un pronostico en una misma apuesta.">Empezar a jugar</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Clickea sobre el logo de usuario. Para poder ingresar o retirar tu dinero ficticio debes completar el monton (minimo $500) y tu contraseña. Tanto la carga como el retiro de saldo puede demorarse hasta 24 hs.">Cargar y retirar saldo</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="El premio acumulado dependenda de la cantidad de jugadores inscriptos en cada apuesta. Quien suma mas puntos se llevara todo el premio, en caso de empate en la primer posicion se repartira en partes iguales entre todos los ganadores. Por cada partido acertado se obtienen 5 puntos.">Premios y Puntuaciones</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Elige la competencia y en RESULTADOS vas a poder ver las posiciones parciales y finales de todos los jugadores. Ademas tendras la posibilidad de divertirte con el chat.">Ver resultados</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Elige la competencia y en MIS PRONOSTICOS vas a poder ver tus jugadas realizadas y tu puntaje. Cuando el cuadro aparezca amarillo significa que tu pronostico fue acertado, rojo si fue equivocada. Ademas clickea sobre la fecha y podas ver los partidos">Mis pronosticos</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Clickea sobre el logo de usuario y  podras cambiar los datos de tu cuenta">Editar perfil</a>
                <a tabindex="0" style="display: flex; justify-content: center; align-items: center;  font-size: 20px; height: 70px" class="btn btn" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Por cualquir duda o sugerencia no dudes en escribirnos un mail a algundiatendremosmail@gmail.com">Contacto</a>              
            </div>
        </div>

         


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>
<script>
var popoverTriggerList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})</script>   
 