<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$apellido=$_POST['apellido'];
$clave=$_POST['clave'];
$rol=$_POST['rol'];



$query = "INSERT INTO `usuario` (`id`, `nombre`, `email`, `telefono`, `apellido`,`clave`,`rol`) VALUES (NULL,'".$nombre."','".$email."','".$telefono."','".$apellido."','".$clave."','".$rol."')";
//$query = "INSERT INTO `usuario` (`id`, `nombre`, `email`, `telefono`, `apellido`,`clave`) VALUES (NULL,'hola','hola','hola','hola','hola')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));


?>