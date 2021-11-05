<?php

$host = "localhost";
$db_name = "footbocking";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, $db_name);

    if(mysqli_connect_errno()){
        die('No fue posible conectarse a la base de datos' . mysqli_connect_error());
    }


$stmt = $conn->prepare("SELECT id, nombre_usuario, tipo_identificacion, numero_identificacion, camara_comercio, id_usuario, foto, estado FROM solicitud");

$stmt->execute();

$stmt->bind_result($id, $nombre, $tipoID, $numeroID, $comercio, $idUsuario, $foto, $estado);



$usuario = array();

    while($stmt->fetch()){

        $temp = array();
        $temp['id'] = $id;
        $temp['nombre_usuario'] = $nombre;
        $temp['tipo_identificacion'] = $tipoID;
        $temp['numero_identificacion'] = $numeroID;
        $temp['camara_comercio'] = $comercio;
        $temp['id_usuario'] = $idUsuario;
        $temp['foto'] = $foto;
        $temp['estado'] = $estado;

        array_push($usuario, $temp);
    }


    echo json_encode($usuario);


?>