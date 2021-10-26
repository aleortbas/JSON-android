<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$idUser=$_POST['id_usuario'];
//$idUser="80";

$query = "select * from cancha where id_usuario='".$idUser."'";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

$arr1 = array();
while ($row=mysqli_fetch_array($query_execute)) {
    $arra = array('id' => $row['id'],'nombre' => $row['nombre'],'precio_hora' => $row['precio_hora'],
    'id_usuario' => $row['id_usuario'],'numero_canchas' => $row['numero_canchas'],'direccion' => $row['direccion']);
    array_push($arr1, $arra);
	
    echo json_encode(array('canchas' => $arr1));
	

}
mysqli_close($conn);

?>
