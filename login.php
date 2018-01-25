<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>MyContacts</title>

</head>
<header>
</header>

<body>

		<h1>Iniciar sessión</h1>
		<form class="form" method="post" name="formlogin" action="test.php">
			<input type="text" placeholder="Usuario" name="Username">
      <br>
			<input type="password" placeholder="Password" name="Password">
      <br>
			<button type="submit" id="login-button">Login</button>
      <br>
      </form>
      <h1>Registrarse</h1>
      <form class="form" method="post" name="formlogin" action="crearusu_proc.php">
  			<input type="text" placeholder="Nombre" name="Username" required>
        <br>
  			<input type="text" placeholder="Apellido" name="Apellido"required>
        <br>
        <input type="text" placeholder="Nick" name="Nick"required>
        <br>
        <input type="text" placeholder="Password" name="Password"required>
        <br>
  			<button type="submit" id="login-button">Registrarse</button>
		</form>

	</div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
