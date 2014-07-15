<?php 
    require_once('../../../conexion.php');
    $nombre = addslashes($_POST['nombre']);
    $descripcion = addslashes($_POST['descripcion']);
    $ciudad = $_POST['ciudad'];
    $instrucciones = $_POST['instrucciones'];
    mysql_query("insert into posiciones values('','$nombre','$descripcion','$ciudad','$instrucciones')");
    $segun = mysql_query("select * from posiciones where nombre = '$nombre'");
    $data = array(
        'id' => 0,
        'nombre' => ""
    );
    while($r = mysql_fetch_assoc($segun)){
        $data['id'] = $r['id'];
        $data['nombre'] = $r['nombre'];
    }
    echo json_encode($data);
?>