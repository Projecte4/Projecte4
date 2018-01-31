<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
		$nombre=$_REQUEST['Nombre'];
		$apellido=$_REQUEST['Apellido'];
		$correo=$_REQUEST['Correo'];
		$direccion=$_REQUEST['Direccion'];
		$telef=$_REQUEST['Telefono'];
		$conexion = mysqli_connect ("localhost", "root", "","bd_mycontacts");
		$idusu=$_SESSION['id'];


			$sql="INSERT INTO contactos (nombre, apellidos, correo, direccion1, telefono, id_usu) VALUES ('$nombre', '$apellido', '$correo', '$direccion', '$telef','$idusu')";
//echo $sql;
		$consulta=mysqli_query($conexion,$sql);
		echo "<a>¡Contacto añadido!</a>";
		 echo"<form method=post action=test.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";


?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
