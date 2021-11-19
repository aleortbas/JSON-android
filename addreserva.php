<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$nombre=$_POST['nombre'];
$hora=$_POST['hora'];
$horaFinal=$_POST['hora_final'];
$id_cancha=$_POST['id'];
$fecha=$_POST['fecha'];

$query = "INSERT INTO `reservas` (`id`, `nombre`, `hora_inicio`, `hora_final`, `id_cancha`, `fecha`) VALUES (NULL, '".$nombre."', '".$hora."', '".$horaFinal."', '".$id_cancha."', '".$fecha."');";
//$query = "INSERT INTO `reservas` (`id`, `nombre`, `hora_inicio`, `hora_final`, `id_cancha`, `fecha`) VALUES (NULL, 'nombre', '17:00', '18:00', '57', '2021-11-18');";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

mysqli_close($conn);


?>