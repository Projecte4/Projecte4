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
		$usuario=$_REQUEST['Usuario'];
		$direccion=$_REQUEST['Direccion']
		$telef=$_REQUEST['Telefono']
		$conexion = mysqli_connect ("localhost", "root", "","bd_mycontacts");
		$idusu=$_SESSION['id']

		if ($pass==$pass2) {
			$sql="INSERT INTO `contactos`(`id_contacto`, `nombre`, `apellidos`, `correo`, `direccion`, `telefono` ,'id_usu') VALUES (null, '$nombre', '$apellido', $correo, '$direccion', '$telef','$idusu')";
		$consulta=mysqli_query($conexion,$sql);
		echo "<a>¡Contacto añadido!</a>";
		 echo"<form method=post action=indexs.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";
		}else{
			echo"<a>Usuario o contraseña incorrectos. Vuelva a intentarlo</a>";
			echo"<form method=post action=indexs.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";
		}



?>



</body>
</html>
