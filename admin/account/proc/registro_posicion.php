<?php 
    require_once('../../../conexion.php');
    $nombre = addslashes($_POST['nombre']);
    $descripcion = addslashes($_POST['descripcion']);
    $sql=mysql_query("insert into posiciones values('','$nombre','$descripcion')");
    if($sql){
        echo 'la posición '.$nombre.' se insertó correctamente';
    }
?>