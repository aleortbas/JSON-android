<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$email=$_POST['email'];
$clave=$_POST['clave'];

$query = "select * from local where email='".$email."' and clave='".$clave."'";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

$arr1 = array();
while ($row=mysqli_fetch_array($query_execute)) {
    $arra = array('id' => $row['id'],'nombre' => $row['nombre'],'nombre_administrador' => $row['nombre_administrador'],'numero_canchas' => $row['numero_canchas'],
    'camara_comercio' => $row['camara_comercio'],'email' => $row['email'],'clave' => $row['clave']);
    array_push($arr1, $arra);
	
    echo json_encode(array('multas' => $arr1));
	

}

mysqli_close($conn);


?>