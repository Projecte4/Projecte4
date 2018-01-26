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
    <div class="cabecera">
    
		<h1>Iniciar sessión</h1>
		<form class="form" method="post" name="formlogin" action="test.php">
			<input type="text" placeholder="Usuario" name="Nick">
			<input type="password" placeholder="Password" name="Password">
			<button type="submit" id="login-button">Login</button>
      <br>
      </form>
  
    </div>
    <div class="explicacion">
      <a>My Contacts te ofrece la possiblidad de añadir tus contactos y mostrartelos en Google Maps para asi poder tenerlos organizados y poder saber su ubicacion exacta en un mapa.
      Aparte de todas esas opciones, nuestra pagina es completamente gratis  por un tiempo ilimitado.
      La informacion aportada a My Contacts es totalmente privada y solo el  usuario podra ver y administar sus contactos</a>
    </div>
    <div class="registrar">
      <h1>Registrarse</h1>
      <form class="form" method="post" name="formlogin" action="registro.proc.php">
  			<center><input type="text" placeholder="Nombre" name="Nombre" required>
  			<input type="text" placeholder="Apellido" name="Apellido"required>
        <br>
        <input type="text" placeholder="Correo" name="Correo"required>
        <input type="text" placeholder="Usuario" name="Usuario"required>
        <br>
        <input type="password" placeholder="Password" name="Password"required>
        <input type="password" placeholder="Password2" name="Password2"required>
        <br>
  			<button type="submit" id="login-button">Registrarse</button></center>
		</form>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
