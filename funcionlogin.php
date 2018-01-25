<?php
include "conexion_proc.php";
error_reporting(0);
  $nom_usu=$_REQUEST['Username'];
  $pass_usu=$_REQUEST['Password'];
  $query="SELECT * FROM usuarios WHERE nombre_usu='$nom_usu' AND password='$pass_usu'";
  $query2=mysqli_query($conexion,$query);
  if (mysqli_num_rows($query2)>0) {
    echo "Usuario Correcto";


  }else {
    echo "<p align=center>Usuario/password incorrecto</p>";
    echo"<form method=post action=login.php>";
    echo"<p align=center><input type=submit value=Volver</p>";
    echo "</form>";
  }
//error_reporting(0);
//$id=$_REQUEST['usuari'];

//echo"$rec_id";
