<?php
require_once('../conexion.php');
require_once('clases.php');
$pr = new Prueba();
$uno = '*';
$dos = 'ciudades';
$pr->nueva($uno,$dos);
?>


//desde otro archivo manda por ajax hacia este archivo que es el que despues manda a la clase