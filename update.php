<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);


$id=$_POST['id'];
$cedula_propiertario=$_POST['cedula_propiertario'];
$placa_vehiculo=$_POST['placa_vehiculo'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];
$valor=$_POST['valor'];
$estado=$_POST['estado'];


$query = "update multas set cedula_propiertario = '".$cedula_propiertario."', placa_vehiculo = '".$placa_vehiculo."', fecha = '".$fecha."', descripcion = '".$descripcion."', valor = '".$valor."', estado = '".$estado."' where id = '".$id."'";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

mysqli_close($conn);

?>