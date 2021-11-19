<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$id=$_POST['id'];
$hora=$_POST['hora'];
$horaFinal=$_POST['hora_final'];

$query = "select * from horas_disponibles where id_cancha = '".$id."' and hora = '".$hora."' and hora_final = '".$horaFinal."'";
//$query = "select * from horas_disponibles where id_cancha = '57'";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

$arr1 = array();
while ($row=mysqli_fetch_array($query_execute)) {
    $arra = array('id_cancha' => $row['id_cancha'],'hora' => $row['hora'], 'estado' => $row['estado'], 'hora_final' => $row['hora_final'],'id' => $row['id']);
    array_push($arr1, $arra);
	
    echo json_encode(array('hora' => $arr1));
	

}

mysqli_close($conn);


?>