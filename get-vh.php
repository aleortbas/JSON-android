<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);



$query = " select personas.cedula, personas.nombre, personas.apellido, vehiculo.placa, 
vehiculo.cedula_propiertario, vehiculo.modelo, vehiculo.anio from personas, vehiculo 
where personas.cedula = vehiculo.cedula_propiertario";
//$query = "select * from vehiculo where cedula_propiertario = '21'";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

while ($row=mysqli_fetch_array($query_execute)) {
    echo $row['cedula']."<br>".$row['nombre']."<br>".$row['apellido'] ."<br>".$row['placa']."<br>".$row['cedula_propiertario']."<br>".$row['modelo']."<br>".$row['anio']."/";
}

mysqli_close($conn);

?>
