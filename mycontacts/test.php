<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
          #mapa {
            height: 50%;
          }
        </style>

    <script type="text/javascript">
      var address,map,geocoder,usuarios;

    function descargaArchivo() {
      // Obtener la instancia del objeto XMLHttpRequest
      if(window.XMLHttpRequest) {
        peticion_http = new XMLHttpRequest();
      }
      else if(window.ActiveXObject) {
        peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
      }

      // Preparar la funcion de respuesta
      peticion_http.onreadystatechange = muestraContenido;

      // Realizar peticion HTTP
      peticion_http.open('GET', 'personasJSON.php?id=3', true);
      peticion_http.send(null);

      function muestraContenido() {
        if(peticion_http.readyState == 4) {
          if(peticion_http.status == 200) {
            usuarios=JSON.parse(peticion_http.responseText);
            var tabla='<table style="color:#000099;width:400px;"><tr style="background:#9BB;"><td>Id</td><td>Nombre</td><td>Apellido</td><td>Correo</td><td>Dirección</td><td>Direccion2</td><td>CP1</td><td>CP2</td><td>Telefono</td></tr>';
            for (var i in usuarios) {
              var direccion='muestraDireccion("'+usuarios[i].direccion1+', '+usuarios[i].codigo_postal1+'")';
              var direccion2='muestraDireccion("'+usuarios[i].direccion2+', '+usuarios[i].codigo_postal2+'")';

              tabla +="<tr><td id='col"+usuarios[i].direccion1+"' >"+usuarios[i].id_usu+"</td><td>"+usuarios[i].nombre+"</td><td>"+usuarios[i].apellidos+"</td><td>"+usuarios[i].correo+"</td><td onclick='"+direccion+"'><u>"+usuarios[i].direccion1+"</u></td><td onclick='"+direccion2+"'><u>"+usuarios[i].direccion2+"<u></td><td>"+usuarios[i].codigo_postal1+"</td><td>"+usuarios[i].codigo_postal2+"</td><td>"+usuarios[i].telefono+"</td></tr>";
            }
            tabla +='</table>';
            document.getElementById("resultado").innerHTML=tabla;
            /*address = usuarios[0].Direccion+', '+usuarios[0].Poblacion+', '+usuarios[0].Provincia+', '+usuarios[0].CP+', '+usuarios[0].Pais;
            */
            initMap();
          }
        }
      }
    }
    function muestraDireccion(direccion){

      address = direccion;
      geocodeAddress(geocoder, map);
    }
    function muestraDireccion(direccion2){

      address = direccion2;
      geocodeAddress(geocoder, map);
    }
    //window.onload = descargaArchivo;
      </script>
  <title>MyContacts</title>

</head>
<header>
</header>

<body>
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
     <p id="coordenadas"></p>
     <br>
     <button type="submit" id="login-button">Añadir contacto</button></center>
 </form>
</div></center>
<a href="modificar.php">Modificar Perfil</a>
<?php
include "conexion_proc.php";
$idusu=$_SESSION['id'];
$q = "SELECT * FROM contactos WHERE id_usu='$idusu'";
$resultado = mysqli_query($conexion, $q);
}
?>

<div id="resultado">
  </div>
  <div id="mapa">
  </div>


    <script>
      function initMap() {
        map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 19,
          center: {lat: -34.397, lng: 150.644}
        });
        geocoder = new google.maps.Geocoder();

        //geocodeAddress(geocoder, map);

      }

      function geocodeAddress(geocoder, resultsMap) {
        //address = "Rambla Marina 241, hospitalet, barcelona,es";
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
      //
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa49s_YWo-2xwvQEjLIEIkUH7mSOu9zFM&callback=descargaArchivo"
    async defer></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
