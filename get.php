<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$local=$_POST['local'];
//$local="13";


$query = "select * from numero_canchas where'".$local."' order by id asc";
//$query = "insert into personas(dni, nombre, telefono, email) values ('1', 'asd', 'asd', 'asd')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

$arr1 = array();
while ($row=mysqli_fetch_array($query_execute)) {
    $arra = array('id' => $row['id'],'local' => $row['local'],'disponible' => $row['disponible']);
    array_push($arr1, $arra);
	
    echo json_encode(array('numeroCanchas' => $arr1));
	

}
mysqli_close($conn);

?>
