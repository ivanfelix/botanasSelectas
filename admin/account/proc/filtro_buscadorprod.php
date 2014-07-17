<?php
require_once('../../../conexion.php');
$sql = mysql_query("select * from productos where nombre like '%".$_POST['datoenv']."%'");
$pos = array('posiciones' => array());
while($r = mysql_fetch_assoc($sql)){
    $data = array();
    $data['id'] = $r['id'];
    $data['nombre'] = $r['nombre'];
    array_push($pos['posiciones'],$data);
}
echo json_encode($pos);
?>