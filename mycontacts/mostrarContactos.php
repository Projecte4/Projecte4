<?php
session_start();
include"conexion_proc.php";
$idusu=$_SESSION['id'];
$q = "SELECT * FROM contactos WHERE id_usu='$idusu'";
$resultado = mysqli_query($conexion, $q);
if (mysqli_num_rows($resultado)>0) {
    while ($registro=mysqli_fetch_array($resultado)) {
      $idCon=$registro['id_contacto'];
    $q2 = "SELECT * FROM ubicaciones WHERE id_usu='$idCon'";
    $resultUbi =mysqli_query($conexion, $q2);
    if (mysqli_num_rows($resultUbi)>0) {
      
    }
      echo "<div class='contactos'>";
      echo "<br/>Nombre: $registro[nombre]";
      echo "<br/>Apellido/Apellidos: $registro[apellidos]";
      echo "<br/>Correo: $registro[correo]";
      echo "<br/>Direccion: $registro[direccion]";
      echo "<br/>Telefono: $registro[telefono]";
      echo "</div>";
    }
}

 ?>
