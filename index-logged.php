<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1c.css">
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/styles.css?v=<?php echo time(); ?>" />
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
    <?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1

header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

?>

    <script src="code1.js" type="text/javascript"></script>
    <title> Elbuencubito - Inicio </title>
    
</head>
<body>
    <header>
        <nav class="nav">
            <img src="aldeano.png" width="25px" class="nav__icon">
            <h1 class="title">Elbuencubito</h1>
            <ul class="nav__ul-normal" style="margin-left: 120px;">
                <li class="nav__li">
                    <i class="fas fa-home"></i>
                    <a href="index-logged.php">Inicio</a>	
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-friends"></i>
                    <a href="">Miembros</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-book"></i>
                    <a href="">Historias</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-circle"></i>
                    <a href="micuenta-logged.php">Mi Cuenta</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-question-circle"></i>
                    <a href="">Ayuda</a>
                </li>
                <button class="nav__button nav__f ocultar" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                <button class="nav__button ocultar" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                <?php
                    session_start();

                    ?>
                        <h2 class="nav__perfil-name mostrar" name="nombrep"><?php echo $_SESSION['nombre']?></h2>
                        <img class="nav__perfil-img mostrar" src="desconocido.png" name="fotop">
                    <?php
                
                    
                
                ?>
                
            </ul>
            
            <ul class="nav__responsive-ul">
                <div class="nav__responsive-menu-container">
                    <div class="fa fa-bars nav__responsive-menu"></div>
                </div>
                <div class="nav__responsive-container">
                    <li class="nav__responsive-li">
                        <i class="fas fa-home"></i>
                        <a href="index-logged.php">Inicio</a>	
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-friends"></i>
                        <a href="">Miembros</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-book"></i>
                        <a href="">Historias</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-circle"></i>
                        <a href="micuenta-logged.php">Mi Cuenta</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-question-circle"></i>
                        <a href="">Ayuda</a>
                    </li>
                    <?php
                    ?>
                        <h2 class="nav__perfil-name mostrar" style="float:left; margin-left:10px; font-weight: bold;" name="nombrep"><b style="font-weight: bold;"><?php echo $_SESSION['nombre']?></b></h2>
                        <img class="nav__perfil-img mostrar" style="float:left;" src="desconocido.png" name="fotop">
                    <?php
                
                    
                
                ?>
                </div>
            </ul>
            
        </nav>
    </header>
    <div class="article__fondo">
        <h1 class="fondo__titulo">¡Bienvenido a la página oficial de Elbuencubito!</h1>
        <h3 class="fondo__subtitulo">Aquí encontrarás novedades, información e historias sobre el servidor mas conocido de Santiago del Estero. Explora, comparte y únete a nuestra gran comunidad de jugadores y lo más importante: diviértete!</h3>
    </div>
    <div class="container">
        <article class="article">
            <div class="article__charlas">
                <h2 class="article__charlas-title sub">Chatea con amigos</h2>
                <div class="article__txt"><img src="peruano.png"><h4>Peruano admin</h4><p>Este es el chat de nuestra página oficial. Aquí podrás comentar experiencias o enviar cualquier mensaje mientras estés jugando o simplemente para comentar lo que desees acerca del servidor. Por favor se amable y trata de evitar un mensaje agresivo o podriás ser baneado.</p></div>
                <div class="article__txt"><img src="desconocido.png"><h4>Invitado (Tú)</h4><input type="text" placeholder="Comenta algo interesante..."></div>
                
            </div>
        </article>
        <aside class="aside">
            <div class="aside__cont">
                <div class="aside__t"><p class="sub">Nuestro discord</p></div>
                <iframe src="https://discord.com/widget?id=728381702870663198&theme=dark" class="aside__disc" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        </aside>
    </div>
    <footer class="footer">
        <div class="footer__div">Todos los derechos reservados</div>
        <div class="footer__div">Contáctanos:</div>
        <div class="footer__div"><i class="fab fa-instagram"></i>
            <a style="color: #bbb" href="https://www.instagram.com/fedetrejo23/">Intagram</a></div>
        <div class="footer__div"><i class="fab fa-youtube"></i>
            <a style="color: #bbb" href="https://www.youtube.com/channel/UCyTLC1e5JV_pchoYC77sUzA">Youtube</a></div>
        <div class="footer__div">Copyright ©Europost 2021</div>
    </footer>
</body>
</html>