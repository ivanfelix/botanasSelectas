<?php
require_once('../conexion.php');
class Prueba{
    function nueva($uno,$dos){
        $sql = mysql_query("select ".$uno." from ".$dos."");
        $c = array();
        while($r = mysql_fetch_assoc($sql)){
            $ciudades = array();
            $ciudades['id'] = $r['id'];
            $ciudades['nombre'] = $r['nombre'];
            $ciudades['id_estado'] = $r['id_estado'];
            array_push($c,$ciudades);
        }
        foreach($c as $ciudad){
            echo '<li id="'.$ciudad['id'].'">' .$ciudad['nombre']. '</li>';
        }
    }
}
?>