<?php
require_once('../../../conexion.php');
$dator = $_POST['datoenv'];
$sql = mysql_query("select * from posiciones where nombre like '%".$_POST['datoenv']."%'");
$pos = array('posiciones' => array());
while($r = mysql_fetch_assoc($sql)){
    $data = array();
    $data['id'] = $r['id'];
    $data['nombre'] = $r['nombre'];
    $data['descripcion'] = substr($r['descripcion'],0,50).'...';
    $idc = $r['ciudad'];
    $sqr = mysql_query("select nombre from ciudades where id = '$idc'");
    while($s = mysql_fetch_assoc($sqr)){
        $data['ciudad'] = $s['nombre'];
    }
    array_push($pos['posiciones'],$data);
}
echo json_encode($pos);
?>