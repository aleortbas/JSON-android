<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);


$id=$_POST['id'];
$disponible=$_POST['disponible'];
$nombre=$_POST['nombre'];
$idlocal=$_POST['id_local'];
$imagen=$_POST['imagen'];

$query = "INSERT INTO `numero_canchas`(`id`, `disponible`, `nombre`, `id_Local`, `foto`) VALUES (NULL,'".$disponible."','".$nombre."','".$idlocal."','".$imagen."')";
//$query = "INSERT INTO `numero_canchas`(`id`, `disponible`, `nombre`, `id_Local`, `imagen`) VALUES ('[value-1]','[value-2]','value-3','30','[value-5]')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));


?>