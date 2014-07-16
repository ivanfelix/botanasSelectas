<?php
require_once('conexion.php');
$id = $_GET['id'];
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
                  <div id="uni">
                        <img src="img/IMG_2584t.jpg">
                        <div id="infouni">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, perspiciatis magnam eius, tempora iusto, dolorum.</h4>
                        </div>    
                    </div>
               </div>
                <div id="uni"></div>
            </section>
            <section id="ri2">
               <?php
                $sqlp = mysql_query("select id,nombre,descripcion,ciudad,instrucciones from posiciones where id = '$id'");
                while($rp = mysql_fetch_assoc($sqlp)){
                ?>
                <div class="item3">
                    <h2><?php echo $rp['nombre'] ?></h2>
                    <?php
                    $id_ciudad = $rp['ciudad'];
                    $sqlc = mysql_query("select nombre from ciudades where id ='$id_ciudad'");
                    while($d=mysql_fetch_assoc($sqlc)){
                    ?>
                    <small><?php echo $d['nombre'] ?></small>
                    <?php
                    }
                    ?>
                    <p><?php echo $rp['descripcion'] ?></p>
                    <div id="instrucciones">
                    <h3>Como aplico?</h3>
                    <p><?php echo $rp['instrucciones'] ?></p>
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
