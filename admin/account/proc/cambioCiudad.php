<?php
require_once('../../../conexion.php');
$valor_recivido = $_POST['str'];
$resp = mysql_query("select * from ciudades where id_estado = '$valor_recivido'");
echo '<option value="Seleccionar">Seleccionar</option>';
while($x = mysql_fetch_assoc($resp)){
    echo '<option value="'. $x['id'] .'">' . $x['nombre'] . '</option>';
}
?>