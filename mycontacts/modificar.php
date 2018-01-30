<?php
session_start();
//echo $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <br>
    <div class="modificar_perfil">
      <center><h3>Modifica tu perfil</h3></center>
      <br>
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
    <br><br>
    <center><form class="form" method="post" name="formlogin" action="test.php">
      <button type="submit" id="login-button">Volver atras</button>
      <br>
      </form></center>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
