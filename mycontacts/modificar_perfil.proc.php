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
  $usuario=$_REQUEST['Usuario'];
  $pass=$_REQUEST['Password'];
  $pass2=$_REQUEST['Password2'];
	$idUsu=$_SESSION['id'];
		$conexion = mysqli_connect ("localhost", "root", "","bd_mycontacts");
		if ($pass==$pass2) {
			$sql="UPDATE usuarios SET nombre_usu='$nombre', apellidos_usu='$apellido', correo='$correo', nick='$usuario', password='$pass' WHERE id_usu = $idUsu";
		$consulta=mysqli_query($conexion,$sql);
		echo "<a>¡Perfil modificado!</a>";
		echo"<form method=post action=indexs.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";
		}else{
			echo"<a>La contraseña no concuerda. Vuelva a intentarlo</a>";
			echo"<form method=post action=modificar.php>";
    	echo"<center><input type=submit value=Volver></center>";
    	echo "</form>";
		}
?>



</body>
</html>
