<?php
session_start();

  $bd_host = "localhost";
  $bd_usuario = "root";
  $bd_password = "";
  $bd_base = "bd_mycontacts";
  $idusu=$_SESSION['id'];


	$con = mysqli_connect($bd_host, $bd_usuario, $bd_password,$bd_base);
  $query="SELECT * FROM contactos where id_usu=$idusu";
  $resultado=$con -> query($query);

  $jsondata = array();

  while( $row = $resultado->fetch_object() ) {

    $jsondata[] = $row;
  }

  $resultado->close();

  header('Content-type: application/json; charset=utf-8');
  echo json_encode($jsondata, JSON_FORCE_OBJECT);
?>
