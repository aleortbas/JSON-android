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
$direccion=$_POST['direccion'];
$numeroCanchasas=$_POST['numero_canchas'];
$precio=$_POST['precio_hora'];
$idUser=$_POST['id_usuario'];

$query = "INSERT INTO `cancha` (`id`, `nombre`, `precio_hora`, `id_usuario`, `numero_canchas`, `direccion`) VALUES (NULL, '".$nombre."', '".$precio."', '".$idUser."', '".$numeroCanchasas."', '".$direccion."')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

?>