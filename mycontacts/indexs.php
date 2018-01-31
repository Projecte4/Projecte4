<?php
session_start();
	if(isset($_SESSION['id'])){
		header("test.php");
	} else if(isset($_SESSION['error'])){
		$error = $_SESSION['error'];
		session_destroy();
	}
	
   ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>MyContacts</title>

</head>
<header>
</header>

<body>
  <div>
    <div class="cabecera">
<div class="cabecera1">

		<!--<h1>Iniciar sessión</h1>-->

    <img class="logo" src="img/logo.png">
  </div>
    <div class="login">
		<form class="form" method="post" name="formlogin" action="test.php">
			<input type="text" placeholder="Usuario" name="Nick">
			<input type="password" placeholder="Password" name="Password">
			<button type="submit" id="login-button">Login</button>
      <br>
      </form>

    </div>
  </div>
  <br>
  <div class="izquierda">
    <center><h2>¿Que funciones hace nuestra pagina?</h2></center>
    <center><div class="explicacion">

      <a>My Contacts te ofrece la possiblidad de añadir tus contactos y mostrartelos en Google Maps para asi poder tenerlos organizados y poder saber su ubicacion exacta en un mapa. Tienes la opcion de modificar tu perfil, modificar tus usuarios, y añadir tantas ubicaciones como quieras asignarle a cada uno de tus contactos.
      La finalidad de nuestra pagina es facilitar la busqueda de un familiar, amigo o conocido y mostrarnos su ubicacion exacta.
      Aparte de todas esas opciones, nuestra pagina es completamente gratis  por un tiempo ilimitado.
      La informacion aportada a My Contacts es totalmente privada y solo el  usuario podra ver y administar sus contactos
      Comparte solo tus datos con aquellas personas en las que confies. Ante cualquier mal huso de esta aplicacion no nos haremos cargo.
    </a>
    </div></center>
  </div>

    <div class="derecha">
      <center><h2>¿Aun no estas registrado?</h2></center>
    <div class="registrar">
      <br>
      <center><h1>Registrarse</h1></center>
      <br>
      <form class="form" method="post" name="formlogin" action="registro.proc.php">
  			<center><input type="text" placeholder="Nombre" name="Nombre" required>
  			<input type="text" placeholder="Apellido" name="Apellido"required>
        <br><br>
        <input type="text" placeholder="Correo" name="Correo"required>
        <input type="text" placeholder="Usuario" name="Usuario"required>
        <br><br>
        <input type="password" placeholder="Password" name="Password"required>
        <input type="password" placeholder="Password2" name="Password2"required>
        <br><br>
  			<button type="submit" id="login-button">Registrarse</button></center>
        <br>
		</form>
  </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="centrado">
    <center><h2>¿Donde estamos?</h2></center>
  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.117610976823!2d2.105329614846129!3d41.34979730628855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498d64bd023fd%3A0x26089fc39cb352a3!2sJesu%C3%AFtes+Bellvitge.+Centre+d&#39;Estudis+Joan+XXIII!5e0!3m2!1ses!2ses!4v1517251245098" width="1156" height="452" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<br><br>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
