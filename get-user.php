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

$query = "select * from usuario where email = '".$email."' and clave = '".$clave."'";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

$arr1 = array();
while ($row=mysqli_fetch_array($query_execute)) {
    $arra = array('id' => $row['id'],'nombre' => $row['nombre'],'apellido' => $row['apellido'],'email' => $row['email'],
    'telefono' => $row['telefono'],'clave' => $row['clave'],'rol' => $row['rol']);
    array_push($arr1, $arra);
	
    echo json_encode(array('user' => $arr1));
	

}
mysqli_close($conn);


?>