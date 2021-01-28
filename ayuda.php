<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1h.css">
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="stylesheet" type="text/css" href="estilosAe.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

    <script src="code5.js" type="text/javascript"></script>
    <title> Elbuencubito - Ayuda </title>
    
</head>
<body>
    <header>
        <nav class="nav">
            <img src="aldeano.png" width="25px" class="nav__icon">
            <h1 class="title" onclick="window.location.href = 'index.php';">Elbuencubito</h1>
            <ul class="nav__ul-normal" style="margin-left: 120px;">
                <li class="nav__li">
                    <i class="fas fa-home"></i>
                    <a href="index.php">Inicio</a>	
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-friends"></i>
                    <a href="miembros.php">Miembros</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-book"></i>
                    <a href="historias.php">Historias</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-circle"></i>
                    <a href="micuenta.php">Mi Cuenta</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-question-circle"></i>
                    <a href="ayuda.php">Ayuda</a>
                </li>
                <?php 
                    include("loguear.php");
                    require_once("isLogin.php");
                    
                    
                    if(!$estado){
                        ?>
                        <button class="nav__button nav__f mostrar" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                        <button class="nav__button mostrar" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                        <?php
                    
                    }else{
                        $nombre = $_SESSION['nombre'];
                        $consulta = mysqli_query($conex,"SELECT * FROM datos WHERE nombre = '$nombre'");
                        $valores = mysqli_fetch_array($consulta);
                        $imagen = $valores['imagen'];
                        ?>
                        <h2 class="nav__perfil-name mostrar" name="nombrep" style="margin-bottom:0px"><?php echo $_SESSION['nombre']?></h2>
                        <img class="nav__perfil-img mostrar" src="<?php echo $imagen;?>" name="fotop" style="margin-bottom:0px">
                        <?php
                    }

                ?>
                
                
            </ul>
            
            <ul class="nav__responsive-ul">
                <div class="nav__responsive-menu-container">
                    <div class="fa fa-bars nav__responsive-menu"></div>
                </div>
                <div class="nav__responsive-container">
                    <li class="nav__responsive-li">
                        <i class="fas fa-home"></i>
                        <a href="index.php">Inicio</a>	
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-friends"></i>
                        <a href="miembros.php">Miembros</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-book"></i>
                        <a href="historias.php">Historias</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-circle"></i>
                        <a href="micuenta.php">Mi Cuenta</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-question-circle"></i>
                        <a href="ayuda.php">Ayuda</a>
                    </li>
                    <?php 
                    include("loguear.php");
                    require_once("isLogin.php");
                    if(!$estado){
                        ?>
                            <button class="nav__responsive-button nav__responsive-f" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                            <button class="nav__responsive-button" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                        <?php
                    
                    }else{
                        ?>
                        <h2 class="nav__perfil-name mostrar" style="float:left; margin-left:10px; font-weight: bold;" name="nombrep"><b style="font-weight: bold;"><?php echo $_SESSION['nombre']?></b></h2>
                        <img class="nav__perfil-img mostrar" style="float:left;" src="<?php echo $imagen;?>" name="fotop">
                        <?php
                    }

                ?>

                </div>
            </ul>
            
        </nav>
    </header>
    <div class="container container1">
        <article class="article">
            <div class="article__charlas">
                <h2 class="article__charlas-title sub" style="display:inline ">Ayuda de usuario</h2><i class="fas fa-question-circle" style="display:inline; font-size:30px"></i>
                
                <p style="margin-top:14px;">

                    Bienenido al apartado de ayuda de nuestra página oficial. <br>
                    <i class="fas fa-chevron-right" id="r1" style="color: rgb(227, 154, 117); margin-left:0px"></i><i class="fas fa-chevron-down" id="d1" style="color: rgb(227, 154, 117); margin-left:0px;"></i>
                    <button onclick="mostrar();" style="margin-top:14px; color: rgb(110, 30, 10);" class="button" id="button1">¿Qué es Elbuencubito?</button>
                    <p class="ayuda-info ayuda-info1" id="infotext1">
                    Elbuencubito es un servidor de minecraft creado alrededor de Agosto de 2019 y se empezó con el fin de divertir a un pequeño grupo de amigos, y al fin y al cabo sigue siendo esta la principal razón de nuestro juego. Actualmente contamos 9 participantes en un servidor classic Vanilla creado a comienzos de 2021 pero a lo largo de nuestra historia existieron más participantes, competiciones y tipos de juego incluyendo mods y plugins. Nuestra comunidad situada en la provincia de Santiago del Estero, Argentina busca crecer cada día mas disfrutando de desafiantes aventuras en Minecraft. 
                    </p>
                    <i class="fas fa-chevron-right" id="r2" style="color: rgb(227, 154, 117); margin-left:14px"></i><i class="fas fa-chevron-down" id="d2" style="color: rgb(227, 154, 117)"></i>
                    <button onclick="mostrar2();" style="color: rgb(110, 30, 10);" class="button" id="button2"> Inicio de sesión y registro</button><br>
                    <p class="ayuda-info ayuda-info2" id="infotext2">
                    Nuestra página oficial cuenta con una especial función que permite a cada usuario identificarse y a partir de ahí realizar diversas acciones. Según tu usuario puedes adquirir cierto rango en nuestra comunidad que te permitirá publicar historias de algún servidor pasado o activo además de otras ventajas. Puedes crearte un usuario en nuestro apartado de <a href="register.php">registro</a> o loguearte en <a href="login.php">login</a> si ya tienes uno.
                    Si tienes algún problema o inconveniente con el registro o inicio de sesión no dudes en contactarnos a cualquiera de las redes o medios habilitados.
                    </p>
                    <i class="fas fa-chevron-right" id="r3" style="color: rgb(227, 154, 117); margin-left:14px"></i><i class="fas fa-chevron-down" id="d3" style="color: rgb(227, 154, 117)"></i>
                    <button onclick="mostrar3();" style="color: rgb(110, 30, 10);" class="button" id="button3"> Participantes</button><br>
                    <p class="ayuda-info ayuda-info2" id="infotext3">
                    Actualmente, Elbuencubito cuenta con 9 participantes activos en todos sus servidores. Estos se pueden destacar como de rango activo en el apartado de miembros. Si tienes la intención de ser participante de alguno de nuestros servidores puedes contactarnos y lo decidiremos. Si no, puedes esperar al anuncio de algún evento público en el que cualquier persona sea o no de nuestra comunidad puede jugar.
                    </p>
                    <i class="fas fa-chevron-right" id="r4" style="color: rgb(227, 154, 117); margin-left:14px"></i><i class="fas fa-chevron-down" id="d4" style="color: rgb(227, 154, 117)"></i>
                    <button onclick="mostrar4();" style="color: rgb(110, 30, 10);" class="button" id="button4"> Publicación de historias</button><br>
                    <p class="ayuda-info ayuda-info2" id="infotext4">
                    La publicación de historias habilitada en la página de <a href="historias.php">historias</a> consiste en un sistema en el cual cualquier participante (sea miembro o no) de uno de nuestros servidores puede relatar algún suceso divertido o importante para dejarlo como memoria de aquel servidor. Si fuiste participante de uno en el que compartir historias puedes libremente crear una historia que haya sucedido en él, dándole un nombre, relatando un comentario y compartiendo una imagen. Si no estás habilitado para publicar una historia, necesitas iniciar sesión.
                    </p>
                    <i class="fas fa-chevron-right" id="r5" style="color: rgb(227, 154, 117); margin-left:14px"></i><i class="fas fa-chevron-down" id="d5" style="color: rgb(227, 154, 117)"></i>
                    <button onclick="mostrar5();" style="color: rgb(110, 30, 10);" class="button" id="button5"> Eventos públicos</button><br>
                    <p class="ayuda-info ayuda-info2" id="infotext5">
                    Elbuencubito es un servidor de Minecraft que comenzó como una comunidad pequeña y en los primeros servidores solo los más destacados miembros de la comunidad pudieron participar. Sin embargo, nuestra comunidad originada en la provincia de Santiago del Estero siempre ha querido ampliarse a lo largo del tiempo llegando a incluir alrededor de 20 personas en algún servidor. Si deseas ser participante, contactanos y mucho más si eres de nuestra provinica. De todas formas y como este punto lo explica, la comunidad realiza periódicamente eventos publicos. Estos pueden consistir en torneos, peleas o mundos muy vastos de público acceso para los que existen premios en nuestra comunidad. Mantente atento a las novedades de nuestra página oficial para saber cuando será el próximo evento público.
                    </p>
                    <i class="fas fa-chevron-right" id="r6" style="color: rgb(227, 154, 117); margin-left:14px"></i><i class="fas fa-chevron-down" id="d6" style="color: rgb(227, 154, 117);"></i>
                    <button onclick="mostrar6();" style="color: rgb(110, 30, 10);" class="button" id="button6"> Sobre el sitio web</button>
                    <p class="ayuda-info ayuda-info12" id="infotext6">
                    Todas las páginas web que conforman el sitio oficial de Elbuencubito fueron programadas y diseñadas por "Europost" uno de los miembros activos del server. Para la fecha de lanzamiento de este artículo, el sitio se encuentra en su primera versión. Contiene en sí funciones básicas para la interacción y diversión de la comunidad. Más adelante y poco a poco se seguirán desarrollando nuevas funciones, mantente atento. Si deseas obtener más información contáctame.
                    </p>
                    <p style="margin-top:14px">Minecraft Java Edition and associated Minecraft Java Edition images are copyright of Mojang AB.</p>
                    
                </p>
            </div>
        </article>
        <aside class="aside">
            <div class="aside__cont">
                <div class="aside__t"><p>Para obtener más ayuda e información no dudes en contactarnos:</p>
                    <li class="aside-li">
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.instagram.com/fedetrejo23/" target="_blank">Intagram</a></div>
                    </li>
                    <li class="aside-li">
                        <i class="fab fa-youtube"></i>
                        <a href="https://www.youtube.com/channel/UCyTLC1e5JV_pchoYC77sUzA" target="_blank">Youtube</a>
                    </li>
                    <li class="aside-li">
                        <i class="fab fa-discord"></i>
                        Invitación de discord:  <br>
                        <a href="https://discord.gg/zUgF6bHm" target="_blank">https://discord.gg/zUgF6bHm</a>
                    </li>
                </div>
                
            
            </div>
                
                
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