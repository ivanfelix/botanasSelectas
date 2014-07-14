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
        <header>
            <section class="cont">
                <a id="logo" href=""><img src="img/logo.jpg"></a>
                <nav id="menu">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="empresa.html">Empresa</a></li>
                        <li><a href="productos.html">Productos</a></li>
                        <li><a href="galeria.html">Galeria</a></li>
                        <li><a href="">Distribuición</a></li>
                        <li><a href="bolsadetrabajo.html">Bolsa de Trabajo</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <section id="cent">
            <section id="left">
               <div id="categ">
                  <?php
                    $sql = mysql_query("select * from ciudades left join estados on ciudades.id_estado = estados.id  group by estados.nombre");
                    while($r = mysql_fetch_assoc($sql)){
                    ?>
                   <ul>
                        <li id="<?php echo $r['id'] ?>"><?php echo $r['nombre'] ?></li>
                    </ul>
                    <?php
                    }  
                    ?>
               </div>
                <div id="uni"></div>
                
            </section>
            <section id="ri2">
              <div id="busq">
                   <input id="buscarb" type="text">
                   <div class="boton" id="butbusc">Buscar</div>
               </div>
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
            </section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

       
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
