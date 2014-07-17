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
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->
        <?php include('header.php'); ?>
        <section id="cent">
            <section id="ri5">
                <section id="container">
                   <?php
                    $sql = mysql_query("select * from fotos");
                    while($r = mysql_fetch_assoc($sql)){
                    ?>
                    <div class="grid-sizer item">
                        <a rel="prettyPhoto[pp_gal]" href="img/galeria/<?php echo $r['nombre'] ?>"><img src="img/galeria/<?php echo $r['nombre'] ?>"></a>
                    </div>
                    <?php
                    }
                    ?>
                </section>
            </section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/r.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>

       <script>
            var container = document.querySelector('#container');
            var msnry;
            imagesLoaded( container, function() {
              msnry = new Masonry( container,{
                  itemSelector: '.item',
              columnWidth: container.querySelector('.grid-sizer')
              })
            })
            $("a[rel^='prettyPhoto']").prettyPhoto()
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
