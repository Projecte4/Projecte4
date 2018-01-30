<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
  <title>MyContacts</title>

</head>
<header>
</header>

<body onload="mapa.initMap()">
  <div class="cabecera">
<div class="cabecera1">

    <!--<h1>Iniciar sessión</h1>-->
  
    <img class="logo" src="img/logo.png">
  </div>
    <div class="logout">

    <form class="form" method="post" name="formlogin" action="logout.proc.php">
      <button type="submit" id="login-button">Logout</button>
      <br>
      </form>
    
    </div>
  </div>

  <?php
  include "login.proc.php";

 // echo "<br>Bienvenido";
   
    $query="SELECT * FROM usuarios WHERE nick='$nick_usu' AND password='$pass_usu'";
  $resultado = mysqli_query($conexion, $query);
    if(mysqli_num_rows($resultado)>0){
      ?>
       <form class="form" method="post" name="formlogin" action="logout.proc.php">
      <button type="submit" id="login-button">Logout</button>
      <br>
      </form>
    
    </div>
  </div>

        <center><h2>¿Quieres añadir un contacto?</h2></center>
   <center><div class="añadircontacto">
    <h3>Añade un contacto</h3>
   <form class="form" method="post" name="formlogin" action="registro_con.proc.php">
     <center><input type="text" placeholder="Nombre" name="Nombre" required>
     <input type="text" placeholder="Apellido" name="Apellido"required>
     <br>
     <input type="text" placeholder="Correo" name="Correo"required>
     <br>
     <input type="text" placeholder="Dirrección" name="Direccion"required>
     <input type="text" placeholder="Telefono" name="Telefono"required>
     <input type="text" placeholder="Ubicacion1" name="Ubicacion1"required>
     <input type="text" placeholder="CP1" name="CP1"required>
     <input type="text" placeholder="Ubicacion2" name="Ubicacion2">
     <input type="text" placeholder="CP2" name="CP2">
     <br>
     <button type="submit" id="login-button">Añadir contacto</button></center>
 </form>
</div></center>
<a href="modificar.php">Modificar Perfil</a>
<?php  
}
include"conexion_proc.php";
$idusu=$_SESSION['id'];
$q = "SELECT * FROM contactos WHERE id_usu='$idusu'";
$resultado = mysqli_query($conexion, $q);
if (mysqli_num_rows($resultado)>0) {
    while ($registro=mysqli_fetch_array($resultado)) {
      $idCon=$registro['id_contacto'];
    $q2 = "SELECT * FROM ubicaciones WHERE id_usu='$idCon'";
    $resultUbi =mysqli_query($conexion, $q2);
    if (mysqli_num_rows($resultUbi)>0) {
      
    }
      echo "<div class='contactos'>";
      echo "<br/>Nombre: $registro[nombre]";
      echo "<br/>Apellido/Apellidos: $registro[apellidos]";
      echo "<br/>Correo: $registro[correo]";
      echo "<br/>Direccion: $registro[direccion]";
      echo "<br/>Telefono: $registro[telefono]";
      echo "</div>";
    }
}

 ?>
 <script>

mapa = {
 map : false,
 marker : false,

 initMap : function() {

 // Creamos un objeto mapa y especificamos el elemento DOM donde se va a mostrar.

 mapa.map = new google.maps.Map(document.getElementById('mapa'), {
   center: {lat: 41.34979329999999, lng: 2.107518300000038},
   scrollwheel: false,
   zoom: 14,
   zoomControl: true,
   rotateControl : false,
   mapTypeControl: true,
   streetViewControl: false,
 });

 // Creamos el marcador
 mapa.marker = new google.maps.Marker({
 position: {lat: 41.34979329999999, lng: 2.107518300000038},
 draggable: true
 });

 // Le asignamos el mapa a los marcadores.
  mapa.marker.setMap(mapa.map);

 },

// función que se ejecuta al pulsar el botón buscar dirección
getCoords : function()
{
  // Creamos el objeto geodecoder
 var geocoder = new google.maps.Geocoder();

 address = document.getElementById('search').value;
 if(address!='')
 {
  // Llamamos a la función geodecode pasandole la dirección que hemos introducido en la caja de texto.
 geocoder.geocode({ 'address': address}, function(results, status)
 {
   if (status == 'OK')
   {
// Mostramos las coordenadas obtenidas en el p con id coordenadas
   document.getElementById("coordenadas").innerHTML='Coordenadas:   '+results[0].geometry.location.lat()+', '+results[0].geometry.location.lng();
// Posicionamos el marcador en las coordenadas obtenidas
   mapa.marker.setPosition(results[0].geometry.location);
// Centramos el mapa en las coordenadas obtenidas
   mapa.map.setCenter(mapa.marker.getPosition());
   agendaForm.showMapaEventForm();
   }
  });
 }
 }
}
</script>
<h1>Obtener Coordenadas a partir de una dirección</h1>
 <div id="mapa" style="width: 450px; height: 350px;"> </div>
 <div><p id="coordenadas"></p></div>
 <input type="text" id="search"> <input type="button" value="Buscar Dirección" onClick="mapa.getCoords()">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCndYOt6ERjShW-kfChbaJfhJRVsy95-Xk&callback=initMap"
    async defer></script>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>