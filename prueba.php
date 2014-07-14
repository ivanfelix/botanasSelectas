<?php
require_once("admin/clases/productos.php");
$pro = new Productos;
?>
<table width="100%">
    <tr>
        <th class="team-member-2 tile-productos">Nombre</th>
        <th class="team-member-2 tile-productos">Descripcion</th>
        <th class="team-member-2 tile-productos" width="23%">Acciones</th>
    </tr>
    <?php
        $p = $pro->listado();
        while($a = $p->fetch_assoc()){
    ?>
    <tr>
        <td class="<?php echo $class; ?>"><?php echo $a['nombre']; ?></td>
        <td class="<?php echo $class; ?>"><?php echo $a['descripcion']; ?></td>
    </tr>
    <?php } ?>
</table>