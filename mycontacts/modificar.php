<?php
session_start();
//echo $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
  </head>
  <body>
     <div class="cabecera">
<div class="cabecera1">

    <!--<h1>Iniciar sessión</h1>-->
  
    <img class="logo" src="img/logo.png">
  </div>
    <div class="logout">
    <form class="form" method="post" name="formlogin" action="indexs.php">
      <button type="submit" id="login-button">Logout</button>
      <br>
      </form>
    
    </div>
  </div>
    <center><h2>¿Quieres modificar tu perfil?</h2>
    <div class="modificar_perfil">
      <center><h3>Modifica tu perfil</h3></center>
    <form class="form" method="post" name="formlogin" action="modificar_perfil.proc.php">
      <center><input type="text" placeholder="Nombre" name="Nombre" required>
      <input type="text" placeholder="Apellido" name="Apellido"required>
      <br><br>
      <input type="text" placeholder="Correo" name="Correo"required>
      <input type="text" placeholder="Usuario" name="Usuario"required>
      <br><br>
      <input type="text" placeholder="Dirrección" name="Direccion"required>
      <input type="text" placeholder="Telefono" name="telefono"required>
      <br><br>
      <input type="password" placeholder="Password" name="Password"required>
      <input type="password" placeholder="Password2" name="Password2"required>
      <br><br>
      <button type="submit" id="login-button">Modificar</button></center>
      <br>
    </form></center>
  </body>
</html>
