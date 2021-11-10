<?php 

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, $db_name);

$query = "SELECT * FROM cancha";
$result=mysqli_query($conn,$query);

//declare array
$output = array();

//tambahkan row kepada array untuk setiap baris rekod...
foreach ($result as $row) {
 array_push($output,$row);


}

// assign to json variable
$json=json_encode($output);

//declare document type to json and output json
header("Content-Type: application/json");
echo $json;




?>
