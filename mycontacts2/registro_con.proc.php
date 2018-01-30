<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$nombre=$_REQUEST['Nombre'];
		$apellido=$_REQUEST['Apellido'];
		$correo=$_REQUEST['Correo'];
		$direccion=$_REQUEST['Direccion'];
		$telef=$_REQUEST['Telefono'];
		$conexion = mysqli_connect ("localhost", "root", "","bd_mycontacts");
		$idusu=$_SESSION['id'];


			$sql="INSERT INTO contactos (nombre, apellidos, correo, direccion, telefono, id_usu) VALUES ('$nombre', '$apellido', '$correo', '$direccion', '$telef','$idusu')";
		$consulta=mysqli_query($conexion,$sql);
		echo "<a>¡Contacto añadido!</a>";
		 echo"<form method=post action=test.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";


?>



</body>
</html>
