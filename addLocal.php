<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass)
or trigger_error (mysqli_error($conn), E_USER_ERROR);
mysqli_select_db($conn, $db_name);

$id=$_POST['id_local'];
$nombre=$_POST['nombre'];
$nombreAdmin=$_POST['nombre_administrador'];
$direccion=$_POST['direccion'];
$numeroCanchasas=$_POST['numero_canchas'];
$camaraComercio=$_POST['camara_comercio'];
$email=$_POST['email'];
$clave=$_POST['clave'];

$query = "INSERT INTO `local` (`Id_local`, `nombre`, `nombre_administrador`, `direccion`, `numero_canchas`, `camara_comercio`, `email`, `clave`)
VALUES (NULL,'".$nombre."','".$nombreAdmin."','".$direccion."','".$numeroCanchasas."','".$camaraComercio."','".$email."','".$clave."')";
//$query = "INSERT INTO `local` (`Id_local`, `nombre`, `nombre_administrador`, `direccion`, `numero_canchas`, `camara_comercio`, `email`, `contraseña`) VALUES (NULL, 'tiro de esquina', 'adolfo', 'Cra. 70 ##13-90,', '3', '324932', 'tiroEsquina@gmail.com', 'admin123')";
$query_execute = mysqli_query($conn, $query) or die (mysqli_error($conn));

?>