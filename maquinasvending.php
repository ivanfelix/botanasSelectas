<?php
    include_once('conexion.php');
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
        <?php include('header.php') ?>
        <section id="cent">
            <section id="centm">
                <section id="lm">
                    
                </section>
                <section id="minf">
                    <h2>Maquinas VENDING (Saltillo) para tu
EMPRESA
NEGOCIO
LUGAR DE TRABAJO
UNIVERSIDAD
ETC...
</h2>
                   <p>Contamos con:
Los precios mas bajos
Gran variedad de productos en diferentes presentaciones 
Excelente servicio
10% en ventas se entregan con producto para eventos de la empresa (solo empresa)
</p>
               <div id="infcm">
                   <h5>INTERESADOS:</h5>
                   <p>Por favor llene el siguiente  formulario con sus datos:</p>
               </div>
               <div id="fmaq">
                   <form>
                        <label>Empresa:</label>
                       <input type="text">
                       <label>No de trabajadores:</label>
                       <input type="text">
                       <label>No de máquinas:</label>
                       <input type="text">
                       <label>Contacto:</label>
                       <input type="text">
                       <input class="boton" type="button" value="Enviar">
                   </form>
               </div>
                </section>
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
