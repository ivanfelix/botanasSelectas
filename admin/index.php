<?php
    include('../conexion.php');

session_start();
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM users WHERE user = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 
    while($row = mysql_fetch_object($rec)) 
    {
        $count++; 
        $result = $row; 
    } 
    if($count == 1) 
    { 
        return 1; 
    } 
    else { 
        return 0; 
    } 
}
    $usr = mysql_real_escape_string($_POST['user']);
    $pas = mysql_real_escape_string($_POST['password']);
if(!isset($_SESSION['id'])) {
    if(isset($_POST['login'])) {
        if(verificar_login($usr,$pas,$result) == 1) {
            $_SESSION['id'] = $result->idusuario;
            header("location:account/");
        }
        else { 
            $uno = true;
        }
    }
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
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">Estas usando un navegador <strong>obsoleto!!!</strong>. Te recomendamos <a href="http://browsehappy.com/">actualizar tu navegador</a> para una mejor experiencia &nbsp; :)</p>
        <![endif]-->
        <header>
            <section class="cont">
                <a id="logo" href=""><img src="../img/logo.jpg"></a>
                <nav id="menu">
                    <ul>
                        <li><a href="/">Volver</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <section id="cent">
            
            <form id="login" method="post" action="">
                <label>Usuario</label>
                <input type="text" name="user">
                <label>Contraseña</label>
                <input type="password" name="password">
                <?php
                if($uno == true){
                    echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
                }
            ?>
                <input type="submit" value="Enviar" name="login">
            </form>
            <?php 
} else { 
    header("location:account/"); 
} 
?>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

       
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
