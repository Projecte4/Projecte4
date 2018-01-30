<?php
include "conexion_proc.php";
error_reporting(0);
  $nick_usu=$_REQUEST['Nick'];
  $pass_usu=$_REQUEST['Password'];
  $query="SELECT * FROM usuarios WHERE nick='$nick_usu' AND password='$pass_usu'";
  $resultado = mysqli_query($conexion, $query);
    if(mysqli_num_rows($resultado)>0){
      $datos_usuario=mysqli_fetch_array($resultado);
        $_SESSION['id']=$datos_usuario['id_usu'];
        $_SESSION['nick']=$datos_usuario['nick'];
        echo $datos_usuario['id_usu'];
        echo "<br>";
        echo $datos_usuario['nick'];
      }else
      {
    echo "<center><div class='error'><h2>Usuario/password incorrecto</h2></div></center>";
    echo"<form method=post action=indexs.php>";
    echo"<center><input type=submit value=Volver></center>";
    echo "</form>";
  }
//error_reporting(0);
//$id=$_REQUEST['usuari'];

//echo"$rec_id";
