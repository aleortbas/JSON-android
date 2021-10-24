<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);


$query = "select * from multa order by id asc";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

while ($row=mysqli_fetch_array($query_execute)) {
    echo $row['id']."<br>".$row['cedula_propiertario']."<br>".$row['placa_vehiculo']."<br>".$row['fecha']."<br>".$row['descripcion']."<br>".$row['valor']."<br>".$row['estado']."/";
}

mysqli_close($conn);

?>
