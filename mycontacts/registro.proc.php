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
		$pass=$_REQUEST['Password'];
		$pass2=$_REQUEST['Password2'];
		$conexion = mysqli_connect ("localhost", "root", "","bd_mycontacts");

		if ($pass==$pass2) {
			$sql="INSERT INTO `usuarios`(`id_usu`, `nombre_usu`, `apellidos_usu`, `correo`, `nick`, `password`) VALUES (null, '$nombre', '$apellido', '$correo', '$usuario', '$pass')";
		$consulta=mysqli_query($conexion,$sql);
		echo "<a>¡Bienvenido a nuestra pagina!</a>";
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