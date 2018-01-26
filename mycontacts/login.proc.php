<?php
include "conexion_proc.php";
error_reporting(0);
  $nick_usu=$_REQUEST['Nick'];
  $pass_usu=$_REQUEST['Password'];
  $query="SELECT * FROM usuarios WHERE nick='$nick_usu' AND password='$pass_usu'";
  $query2=mysqli_query($conexion,$query);
  if (mysqli_num_rows($query2)>0) {
    echo "Usuario Correcto";


  }else {
    echo "<p align=center>Usuario/password incorrecto</p>";
    echo"<form method=post action=indexs.php>";
    echo"<center><input type=submit value=Volver></center>";
    echo "</form>";
  }
//error_reporting(0);
//$id=$_REQUEST['usuari'];

//echo"$rec_id";
