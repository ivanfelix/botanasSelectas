<?php
require_once('../../../conexion.php');
$id = $_POST['id'];
$sql = mysql_query("select nombre from posiciones where id = '$id'");
while($r = mysql_fetch_assoc($sql)){
    echo "La posición \"".$r['nombre']."\" fue eliminada con exito";
}
mysql_query("delete from posiciones where id = '$id'");
?>