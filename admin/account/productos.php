<?php
    include_once('../../conexion.php');
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
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->
        <header>
            <section class="cont">
                <a id="logo" href=""><img src="../../img/logo.jpg"></a>
                <nav id="menu">
                    <ul>
                        <li><a href="/">Volver</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <section id="cent">
            <section id="left">
                <ul id="listasel">
                    <li id="lipri">Productos</li>
                   <?php
                    $sql = mysql_query("select id,nombre from productos");
                    while($r = mysql_fetch_assoc($sql)){
                    ?>
                    <li id="<?php echo $r['id'] ?>"><a href="productos.php?id=<?php echo $r['id'] ?>"><?php echo $r['nombre'] ?></a><div title="Eliminar" class="eliminar"></div><div title="Editar" class="editar"></div></li>
                    <?php
                    }    
                    ?>
                </ul>
            </section>
                <section id="ri2">
                    <section id="sprod">
                        <h4>Registrar un producto</h4>
                        <form>
                            <label>Nombre del producto:</label>
                            <input type="text">
                            <label>Descripción:</label>
                            <textarea></textarea>
                            <label>Foto del producto:</label>
                            <input type="file">
                            <label>Foto dos:</label>
                            <input type="file">
                            <div id="tabla">
                                <label>Producto</label>
                                <input type="text">
                                <label>Numero</label>
                                <input type="text">
                                <label>Por porción</label>
                                <input type="text">
                                <label>Kcal</label>
                                <input type="text">
                            </div>
                            <input type="button" value="Enviar">
                        </form>
                    </section>
                </section>
            </section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>

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
