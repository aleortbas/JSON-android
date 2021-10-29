<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);


$id_local=$_POST['id_local'];
$disponible=$_POST['disponible'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$id=$_POST['id'];

$query = "UPDATE `numero_canchas` SET `disponible` = '".$disponible."', `nombre` = '".$nombre."', `imagen` = '".$imagen."', `id_Local` = '".$id_local."' WHERE `numero_canchas`.`id` = '".$id."';";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

mysqli_close($conn);

?>