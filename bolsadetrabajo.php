<?php
require_once('conexion.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link type="text/plain" rel="author" href="humans.txt">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->
        <?php include('header.php'); ?>
        <section id="cent">
            <section id="left">
               <div id="categ">
                   <ul id="l_est">
                  <?php
                    $sql = mysql_query("select * from ciudades left join estados on ciudades.id_estado = estados.id  group by estados.nombre");
                    while($r = mysql_fetch_assoc($sql)){
                    ?>
                        <li id="<?php echo $r['id'] ?>"><?php echo $r['nombre'] ?></li>
                    <?php
                    }  
                    ?>
                    </ul>
               </div>
                <div id="uni">
                    <img src="img/IMG_2584t.jpg">
                    <div id="infouni">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, perspiciatis magnam eius, tempora iusto, dolorum.</h4>
                    </div>    
                </div>
            </section>
            <section id="ri2">
              <div id="busq">
                   <input id="buscarb" type="text" placeholder="Buscar posición" >
               </div>
               <div id="insertar">
               <?php
                $sqlp = mysql_query("select id,nombre,descripcion,ciudad from posiciones");
                while($rp = mysql_fetch_assoc($sqlp)){
                ?>
                <div class="item2">
                    <h2><?php echo $rp['nombre'] ?></h2>
                    <p><?php echo substr($rp['descripcion'],0,50).'...'; ?></p>
                    <?php
                    $id_ciudad = $rp['ciudad'];
                    $sqlc = mysql_query("select nombre from ciudades where id ='$id_ciudad'");
                    while($d=mysql_fetch_assoc($sqlc)){
                    ?>
                    <small><?php echo $d['nombre'] ?></small>
                    <?php
                    }
                    ?>
                    <div class="bots">
                       <div class="botsh" title="Compartir">
                           <div class="imgsh"></div>
                       </div>
                        <a href="detalletrabajo.php?id=<?php echo $rp['id'] ?>"><div class="boton">Ver posicion</div></a>
                    </div>
                </div>
                <?php
                }  
                ?>
                </div>
            </section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            $('#l_est li').click(function(){
                var elid = $(this).attr('id')
                var envio = {id:elid}
                $.post('admin/account/proc/filtro_estado.php',envio,function(resp){
                    $('#insertar').empty()
                    for(pos in resp.posiciones){
                        $('#insertar').append('<div class="item2"><h2>'+resp.posiciones[pos].nombre+'</h2><p>'+resp.posiciones[pos].descripcion+'</p><small>'+resp.posiciones[pos].ciudad+'</small><div class="bots"><div class="botsh" title="Compartir"><div class="imgsh"></div></div><a href="detalletrabajo.php?id='+resp.posiciones[pos].id+'"><div class="boton">Ver posicion</div></a></div></div></div>')
                    }
                },'json')
            })
            $('#buscarb').keyup(function(){
                var datos = $('#buscarb').val(),enviar = {datoenv:datos}
                 $.post('admin/account/proc/filtro_buscador.php',enviar,function(resp){
                    $('#insertar').empty()
                    for(pos in resp.posiciones){
                        $('#insertar').append('<div class="item2"><h2>'+resp.posiciones[pos].nombre+'</h2><p>'+resp.posiciones[pos].descripcion+'</p><small>'+resp.posiciones[pos].ciudad+'</small><div class="bots"><div class="botsh" title="Compartir"><div class="imgsh"></div></div><a href="detalletrabajo.php?id='+resp.posiciones[pos].id+'"><div class="boton">Ver posicion</div></a></div></div></div>')
                    }
                },'json')
            })
        </script>
       
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
