<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, $db_name);

    if(mysqli_connect_errno()){
        die('No fue posible conectarse a la base de datos' . mysqli_connect_error());
    }

$id_Local=$_GET['id'];


$stmt = $conn->prepare("SELECT id, disponible, nombre, id_Local, url FROM numero_canchas WHERE id_Local='".$id_Local."';");

$stmt->execute();

$stmt->bind_result($idUsuario, $disponible, $nombre, $idLocal, $image);



$usuario = array();

    while($stmt->fetch()){

        $temp = array();
        $temp['id'] = $idUsuario;
        $temp['id_Local'] = $idLocal;
        $temp['disponible'] = $disponible;
        $temp['nombre'] = $nombre;
        $temp['url'] = $image;

        array_push($usuario, $temp);
    }


    echo json_encode($usuario);


?>