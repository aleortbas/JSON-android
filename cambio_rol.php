<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$idlocal=$_POST['idUser'];

$query = "UPDATE usuario SET rol ='3' WHERE id='".$idlocal."'";
$query2 = "UPDATE solicitud SET estado='2' WHERE id_usuario='".$idlocal."'";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));
$query_execute2 = mysqli_query($conn, $query2) or die (mysqli_error($conn));

mysqli_close($conn);

?>