<?php
session_start();
echo $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Modificar el Perfil</h1>
    <form class="form" method="post" name="formlogin" action="modificar_perfil.proc.php">
      <center><input type="text" placeholder="Nombre" name="Nombre" required>
      <input type="text" placeholder="Apellido" name="Apellido"required>
      <br>
      <input type="text" placeholder="Correo" name="Correo"required>
      <input type="text" placeholder="Usuario" name="Usuario"required>
      <br>
      <input type="text" placeholder="Dirrección" name="Direccion"required>
      <input type="text" placeholder="Telefono" name="telefono"required>
      <input type="password" placeholder="Password" name="Password"required>
      <input type="password" placeholder="Password2" name="Password2"required>
      <br>
      <button type="submit" id="login-button">Modificar</button></center>
  </body>
</html>
